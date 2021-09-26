<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $id_member  = $_POST["id_user"];
    $id_mitra   = $_POST["id_mitra"];

    $id_header  = $db->getLastNumber("customer_order_header", "id");
    $kode_order = $db->getLastNumber("customer_order_header", "kode", 6);
    $kode_trx   = $_POST["kode_trx"];
    
    if(strlen($_POST["metode_pembayaran"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Metode pembayaran harus diisi.")));
    }
    
    //TIPE USER
    $data_user = $db->getFieldValue("member", array("*"), array("id" => $id_member));
    $tipe_user = count($data_user)>0?$data_user[0]["jenis_user"]:0;
    
    $total = 0;
    $orders = array();
    $row = explode("\n", $_POST["orders"]);
    foreach($row as $i => $value) {
        $col = explode("\t", $value);    
        $id_produk = $col[0];
        $ukuran    = $col[1];
        $warna     = $col[2];
        $qty       = $col[3];
        
        //CEK AVIABYLITY PRODUK
        $sql = "SELECT 
                    A.id, 
                    A.kode, 
                    A.nama,
                    B.nama_file AS foto,
                    A.satuan, 
                    A.harga_modal AS harga_beli, ".
                    (count($data_user)>0?"COALESCE(C.harga_jual, A.harga_jual) AS harga_jual_khusus,":"A.harga_jual,") . "   
                    A.harga_diskon, 
                    A.persen_diskon, 
                    A.berat, 
                    A.harga_diskon, 
                    A.persen_diskon, 
                    A.berat, 
                    IF(A.harga_diskon>0 AND IF(A.from_date_harga_diskon IS NOT NULL, A.from_date_harga_diskon<=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1) AND 
                    IF(A.to_date_harga_diskon IS NOT NULL, A.to_date_harga_diskon>=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1), 1, 0) AS harga_promo, 
                    IF(A.persen_diskon>0 AND IF(A.from_date_persen_diskon IS NOT NULL, A.from_date_persen_diskon<=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1) AND 
                    IF(A.to_date_persen_diskon IS NOT NULL, A.to_date_persen_diskon>=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1), 1, 0) AS diskon_promo  
                FROM 
                    produk AS A LEFT JOIN 
                    gambar_produk AS B ON B.id_produk=A.id AND as_default='Y'" . 
                    (count($data_user)>0?" LEFT JOIN (SELECT id_produk, harga_jual FROM harga_jual_user WHERE tipe_user='$tipe_user' AND harga_jual>0 GROUP BY id_produk) AS C ON C.id_produk=A.id":"")." 
                WHERE 
                    A.id='".$id_produk."'";
        $db->mysql_query($sql, $rec_count, $data);
        if($rec_count==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Produk dengan kode $id_produk tidak tersedia!")));
        }

        $data[0]["persen_diskon"] = $data[0]["diskon_promo"]==1?$data[0]["persen_diskon"]:0;
        $data[0]["harga_diskon"]  = $data[0]["harga_promo"]==1?$data[0]["harga_diskon"]:0;
        $data[0]["harga_jual"]    = $data[0]["harga_diskon"]>0?$data[0]["harga_diskon"]:$data[0][count($data_user)==0?"harga_jual":"harga_jual_khusus"];
        $data[0]["subtotal"]      = $data[0]["harga_jual"]-($data[0]["harga_jual"]*$data[0]["persen_diskon"]*0.01);    
        $data[0]["grandtotal"]    = $qty*$data[0]["subtotal"];
        
        $orders[$i]["id"]            = $data[0]["id"];
        $orders[$i]["kode"]          = $data[0]["kode"];
        $orders[$i]["nama"]          = $data[0]["nama"];
        $orders[$i]["gambar"]        = $data[0]["foto"];
        $orders[$i]["satuan"]        = $data[0]["satuan"];
        $orders[$i]["ukuran"]        = $ukuran;
        $orders[$i]["warna"]         = $warna;
        $orders[$i]["jumlah"]        = $qty;
        $orders[$i]["berat"]         = $data[0]["berat"];
        $orders[$i]["harga_beli"]    = $data[0]["harga_beli"];
        $orders[$i]["harga_jual"]    = $data[0]["harga_jual"];
        $orders[$i]["tipe_diskon"]   = $data[0]["tipe_diskon"];
        $orders[$i]["harga_diskon"]  = $data[0]["harga_diskon"];
        $orders[$i]["persen_diskon"] = $data[0]["persen_diskon"];
        $orders[$i]["subtotal"]      = $data[0]["subtotal"];
        $orders[$i]["grandtotal"]    = $data[0]["grandtotal"];

        $total+=$orders[$i]["grandtotal"];   
    }
    
    //CEK VALIDASI VOUCHER
    $list_voucher = array();
    if(isset($_POST["voucher"])) {
        $row_voucher = explode("\n", $_POST["voucher"]);
        foreach($row_voucher as $i_voucher => $value_voucher) {
            $col_voucher = explode("\t", $value_voucher);    
            $get_valid_voucher = $db->getFieldValue("voucher", array("*"), array("kode_voucher" => $col_voucher[0], "is_valid" => "Y", "jenis_voucher" => $col_voucher[3]), array(), 0, 0 , "", "batas_valid>=DATE_FORMAT(NOW(), '%Y-%m-%d')");
            if(count($get_valid_voucher)==0) {
                $db->mysql_close();
                die(json_encode(array("success" => false, "message" => "No. voucher ".$col_voucher[0]." tidak valid!")));
            }
            $list_voucher[$i_voucher]["id"]            = $get_valid_voucher[0]["id"];
            $list_voucher[$i_voucher]["kode_voucher"]  = $col_voucher[0];
            $list_voucher[$i_voucher]["nominal"]       = $col_voucher[1];
            $list_voucher[$i_voucher]["tipe_voucher"]  = $col_voucher[2];
            $list_voucher[$i_voucher]["jenis_voucher"] = $col_voucher[3];
        }
    }
    
    //SAVE ALAMAT
    if(count($data_user)>0) {
        $data_alamat = $db->getFieldValue("customer_address", array("*"), array("id_member" => $data_user[0]["id"], "UPPER(nama)" => trim(strtoupper($_POST["nama"])))); 
        if(count($data_alamat)>0) {
            $db->mysql_update("customer_address", array(
                "nama" => $_POST["nama"],
                "alamat" => $_POST["alamat"],
                "latitude" => $_POST["latitude"],
                "longitude" => $_POST["longitude"],
                "id_propinsi" => $_POST["propinsi"],
                "nama_propinsi" => $_POST["nama_propinsi"],
                "id_kota" => $_POST["kota"],
                "nama_kota" =>  $_POST["nama_kota"],        
                "id_kecamatan" => $_POST["kecamatan"],
                "nama_kecamatan" =>  $_POST["nama_kecamatan"],
                "kode_pos" => $_POST["kode_pos"],                
                "no_hp" => $_POST["no_hp"]                
            ), array(
                "id" => $data_alamat[0]["id"]
            ));
        } else {
            $db->mysql_insert("customer_address", array(
                "id_member" => $data_user[0]["id"],
                "nama" => $_POST["nama"],
                "alamat" => $_POST["alamat"],
                "latitude" => $_POST["latitude"],
                "longitude" => $_POST["longitude"],
                "id_propinsi" => $_POST["propinsi"],
                "nama_propinsi" => $_POST["nama_propinsi"],
                "id_kota" => $_POST["kota"],
                "nama_kota" =>  $_POST["nama_kota"],        
                "id_kecamatan" => $_POST["kecamatan"],
                "nama_kecamatan" =>  $_POST["nama_kecamatan"],
                "kode_pos" => $_POST["kode_pos"],                
                "no_hp" => $_POST["no_hp"]
            ));
        }
    }

    //SAVE JADWAL TERAPI
    $db->mysql_delete("customer_order_jadwal_terapi", array("id_header" => $id_header));

    $temp_tanggal_terapi = explode("-", $_POST["tanggal_terapi"]);
    $tanggal_terapi = $temp_tanggal_terapi[2]."-".$temp_tanggal_terapi[1]."-".$temp_tanggal_terapi[0];

    $db->mysql_insert("customer_order_jadwal_terapi", array(
        "id_header"         => $id_header,
        "riwayat_kesehatan" => $_POST["riwayat_kesehatan"],
        "tanggal_terapi"    => $tanggal_terapi,
        "jam_terapi"        => $_POST["jam_terapi"]
    ));
    
    //SAVE ONGKOS KIRIM
    $db->mysql_delete("customer_order_ongkir", array("id_header" => $id_header));
    $db->mysql_insert("customer_order_ongkir", array(
        "id_header" => $id_header,
        "id_ekspedisi" => $_POST["kurir_id"],
        "kode_layanan" => $_POST["kode_layanan"],
        "layanan"      => $_POST["layanan"],
        "nominal"      => $_POST["nominal"],
        "etd"          => $_POST["etd"],
        "tarif"        => $_POST["nominal"]
    ));
    $total_ongkir = $_POST["nominal"];
    
    //SAVE DETAIL
    $jumlah = 0;
    $total  = 0;
    $sql_insert = "INSERT INTO customer_order_detail(id_header, id_produk, kode, nama, gambar, satuan, ukuran, warna, jumlah, berat, harga_beli, harga_jual, harga_diskon, persen_diskon, sub_total, grand_total) VALUES";
    foreach ($orders as $key => $value) {
        $sql_insert.="("
            . "'$id_header', "
            . "'".$value["id"]."',"
            . "'".$value["kode"]."',"
            . "'".$value["nama"]."',"
            . "'".$value["gambar"]."',"
            . "'".$value["satuan"]."',"
            . "'".$value["ukuran"]."',"
            . "'".$value["warna"]."',"
            . "'".$value["jumlah"]."',"
            . "'".$value["berat"]."',"
            . "'".$value["harga_beli"]."',"
            . "'".$value["harga_jual"]."',"
            . "'".$value["harga_diskon"]."',"
            . "'".$value["persen_diskon"]."',"
            . "'".$value["subtotal"]."',"
            . "'".$value["grandtotal"]."'),";
        
        $jumlah+=$value["jumlah"];
        $total+=$value["grandtotal"];
    }

    $db->mysql_execute(rtrim($sql_insert, ","));
    
    
    //SAVE VOUCHER HANYA 1 VOUCHER
    $total_voucher = 0;
    if(count($list_voucher)>0) {
        $sql_insert = "INSERT INTO customer_order_voucher(id_header, kode_voucher, nominal, tipe_voucher, jenis_voucher) VALUES";
        foreach($list_voucher as $key => $value) {
            $sql_insert.="('$id_header', '".$value["kode_voucher"]."', '".$value["nominal"]."', '".$value["tipe_voucher"]."', '".$value["jenis_voucher"]."'),";
            $db->mysql_update("voucher", array("is_valid" => "N"), array("id" => $value["id"]));
                        
            $total_voucher = ($value["tipe_voucher"]=="persentase"?(($value["jenis_voucher"]=="ongkir"?$total_ongkir:$grandtotal)*($value["nominal"]*0.01)):$value["nominal"]);
            if ($value["jenis_voucher"]=="ongkir" && $total_voucher > $total_ongkir) {
                $total_voucher = $total_ongkir;
            }

            if ($value["jenis_voucher"]=="belanja" && $total_voucher > $grandtotal) {
                $total_voucher = $grandtotal;
            }    

            break;
        }
        
        $db->mysql_execute(rtrim($sql_insert, ","));
    }
    
    //SAVE HEADER
    $tanggal_jam = date("Y-m-d H:i:s");
    $db->mysql_insert("customer_order_header", array(
        "id" => $id_header,
        "id_member" => $id_member,
        "id_mitra" => $id_mitra,
        "kode" => $kode_order,
        "tanggal_jam" => $tanggal_jam,
        
        "nama" => $_POST["nama"],
        "alamat" => $_POST["alamat"],
        "latitude" => $_POST["latitude"],
        "longitude" => $_POST["longitude"],
        "id_propinsi" => $_POST["propinsi"],
        "nama_propinsi" => $_POST["nama_propinsi"],
        "id_kota" => $_POST["kota"],
        "nama_kota" => $_POST["nama_kota"],        
        "id_kecamatan" => $_POST["kecamatan"],
        "nama_kecamatan" => $_POST["nama_kecamatan"],
        "kode_pos" => $_POST["kode_pos"],
        "no_hp" => $_POST["no_hp"],
        
        "is_dropship" => $_POST["is_dropship"],
        "dropship_name" => $_POST["dropship_name"],
        "dropship_phone" => $_POST["dropship_phone"],
        "email_notifikasi" => $_POST["email_notifikasi"],
        
        "pembayaran" => $_POST["metode_pembayaran"],
        
        "jumlah"     => $jumlah,
        "total"      => $total,
        "diskon"     => "0",
        "subtotal"   => $total-0,
        "voucher"    => $total_voucher,
        "ongkir"     => $total_ongkir,
        "grandtotal" => $total-0-$total_voucher+$total_ongkir,
        
        "is_open" => "N",
        "date_update_status" => $tanggal_jam,
        "status" => "0" 
    ));
    
    //INSERT BANK TRANSFER
    $db->mysql_delete("customer_order_transfer_bank", array("id_header" => $id_header));
    $db->mysql_insert("customer_order_transfer_bank", array(
        "id_header" => $id_header,
        "bank_id" => $_POST["bank_id"],
        "no_rekening" => $_POST["bank_no_rekening"],
        "nama_pemilik_rekening" => $_POST["bank_nama_pemilik_rekening"],
        "nama_bank" => $_POST["bank_nama"],
        "cabang" => $_POST["bank_cabang"]
    ));
    
    //INSERT HISTORI PEMESANAN
    $db->mysql_insert("histori_status_pemesanan", array(
        "id" => $db->getLastNumber("histori_status_pemesanan", "id"),
        "id_pemesanan" => $id_header,
        "tanggal_jam" => $tanggal_jam,
        "penjelasan" => "Customer melakukan checkout."
    ));
     
    
    //NOTIFIKASI TO ADMIN, MITRA & KONSUMEN
    $gcmRegIds = array();
    if(strlen($data_user['gcm_regid'])>0) array_push($gcmRegIds, $data_user['gcm_regid']);

    $data_mitra = $db->getFieldValue("member", array("*"), array("id" => $id_mitra));
    foreach ($data_mitra as $key => $value) {
        if(strlen($value['gcm_regid'])>0) array_push($gcmRegIds, $value['gcm_regid']);
    }

    $data_admin = $db->getFieldValue("member", array("*"), array("tipe" => 2));
    foreach ($data_admin as $key => $value) {
        if(strlen($value['gcm_regid'])>0) array_push($gcmRegIds, $value['gcm_regid']);
    }

    if(count($gcmRegIds)>0) {
        $data_order = $db->getFieldValue("
                customer_order_header AS A LEFT JOIN 
                customer_order_ongkir AS B ON A.id=B.id_header LEFT JOIN 
                ekspedisi AS C ON B.id_ekspedisi=C.id LEFT JOIN 
                member AS D ON A.id_mitra=D.id LEFT JOIN 
                customer_order_jadwal_terapi AS E ON E.id_header=A.id", 
            array(
                "A.id",
                "A.kode AS no_transaksi", 
                "DATE_FORMAT(A.tanggal_jam, '%d-%m-%Y %H:%i') AS tgl_transaksi", 
                "A.pembayaran", 
                "A.nama", 
                "A.jumlah AS qty", 
                "A.grandtotal AS jumlah", 
                "B.etd AS estimasi", 
                "C.kode AS kode_kurir", 
                "CONCAT(C.kode, ' ', B.kode_layanan) AS kurir",
                "B.no_resi AS noresi", 
                "A.status", 
                "C.gambar", 
                "D.id AS mitra_id", 
                "CONCAT(D.first_name, ' ', D.last_name) AS mitra_nama", 
                "E.riwayat_kesehatan", 
                "DATE_FORMAT(E.tanggal_terapi, '%d/%m/%Y') AS tanggal_terapi", 
                "E.jam_terapi"
            ),
            array("A.id" => $id_header)
        );

        include $root."includes/php/GCM.php";    
        $gcm = new GCM();
        $message = json_encode($data_order[0]);
        $notif_id = $db->create_kode_unik();            
        $result = $gcm->sendmsg($gcmRegIds, array("tipe" => "order", "notif_id" => $notif_id, "message" => $message));
        $db->mysql_insert(
            "push_notification", 
            array(
                "notif_id" => $notif_id,
                "tipe" => "orderbaru",
                "message" => $message,
                "result" => json_encode($result)
            )
        );
    }
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "order" => array("no_transaksi" => $kode_order, "tgl_transaksi" => $tanggal_jam, "pembayaran" => $_POST["pembayaran"], "nama" => $_POST["nama_penerima"], "qty" => $total_qty, "jumlah" => (($grandtotal-$total_voucher)+$total_ongkir), "estimasi" => $_POST["etd"], "gambar" => "", "status" => 0), "message" => "Proses pemesanan berhasil. Silahkan lakukan pembayaran.")));