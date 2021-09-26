<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $kode_trx = $_POST["kode_trx"];
    
    //TIPE USER
    $data_user = $db->getFieldValue("member", array("*"), array("id" => $_POST["id_user"]));
    $tipe_user = count($data_user)>0?$data_user[0]["jenis_user"]:0;
    
    $total_qty = 0;
    $total = 0;
    $cart = array();
    
    $data_umum = $db->getFieldValue("umum", array("hari", "jam", "menit"));
    
    $sql = "SELECT
                A.id,
                A.id_produk, 
                A.ukuran, 
                A.warna, 
                A.qty
            FROM 
                (SELECT id, id_produk, ukuran, warna, qty, timeorder, DATE_ADD(DATE_ADD(DATE_ADD(timeorder, INTERVAL ".$data_umum[0]["hari"]." DAY), INTERVAL ".$data_umum[0]["jam"]." HOUR), INTERVAL ".$data_umum[0]["menit"]." MINUTE) AS timeover, 
                DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i:%s') AS timecurrent FROM produk_keep WHERE kode_trx='$kode_trx' AND locked=0) AS A WHERE A.timeover<=A.timecurrent";
    $db->mysql_query($sql, $rec_count, $data);
    foreach($data as $value) {
        $db->mysql_update(
            "produk_varian", 
            array(
                "jumlah" => "(jumlah+".$value["qty"].")", 
                "keep" => "(keep-".$value["qty"].")"), 
            array(
                "id_produk" => $value["id_produk"], 
                "ukuran" => $value["ukuran"],
                "warna" => $value["warna"]), 
            array(
                "jumlah", 
                "keep")
        );
        
        $db->mysql_delete("produk_keep", array("id" => $value["id"]));
    }    
    
    
    $sql = "SELECT 
                A.id_produk, 
                A.ukuran, 
                A.warna, 
                A.qty, 
                TIMESTAMPDIFF(DAY, A.timecurrent, A.timeover) AS hari, 
                MOD(TIMESTAMPDIFF(HOUR, A.timecurrent, A.timeover), 24) AS jam, 
                MOD(TIMESTAMPDIFF(MINUTE, A.timecurrent, A.timeover), 60) AS menit, 
                MOD(TIMESTAMPDIFF(SECOND, A.timecurrent, A.timeover), 60) AS detik,
                A.timeover
            FROM 
                (SELECT id_produk, ukuran, warna, qty, timeorder, DATE_ADD(DATE_ADD(DATE_ADD(timeorder, INTERVAL ".$data_umum[0]["hari"]." DAY), INTERVAL ".$data_umum[0]["jam"]." HOUR), INTERVAL ".$data_umum[0]["menit"]." MINUTE) AS timeover, 
                DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i:%s') AS timecurrent FROM produk_keep WHERE kode_trx='$kode_trx' AND locked=0) AS A WHERE A.timeover>A.timecurrent";
    //die($sql);
    $db->mysql_query($sql, $rec_count, $produk_keep);
    foreach($produk_keep as $produk_keep_i => $produk_keep_value) {
        $id_produk = $produk_keep_value["id_produk"];
        $ukuran    = $produk_keep_value["ukuran"];
        $warna     = $produk_keep_value["warna"];
        $qty       = $produk_keep_value["qty"];
        
        $qty_komulatif = $qty;
        foreach($produk_keep as $produk_keep_i_ => $produk_keep_value_) {
            if($$produk_keep_i!=$$produk_keep_i_ && $produk_keep_value["id_produk"]==$produk_keep_value_["id_produk"]) {
                $qty_komulatif+=$produk_keep_value_["qty"];
            }
        }
        
        //GET LIST UKURAN DAN WARNA
        $list_ukuran = $list_warna = array();
        $data_ukuran_warna = $db->getFieldValue("produk_varian AS A LEFT JOIN produk_keep AS B ON A.id_produk=B.id_produk AND A.ukuran=B.ukuran AND A.warna=B.warna AND B.kode_trx=$kode_trx", array("A.id_produk", "A.ukuran", "A.warna", "A.jumlah+COALESCE(B.qty, 0) AS jumlah"), array("A.id_produk" => $id_produk), array(), 0, 0, "", "A.jumlah+COALESCE(B.qty, 0)>0");
        $jumlah_stok = 0;
        if(count($data_ukuran_warna)==1 && $data_ukuran_warna[0]["ukuran"]=="" && $data_ukuran_warna[0]["warna"]=="") {
            $jumlah_stok = $data_ukuran_warna[0]["jumlah"];
        } else {
            //GET LIST UKURAN
            foreach($data_ukuran_warna as $i => $value) {        
                $jumlah_stok+=$value["jumlah"];
                if(strlen($value["ukuran"])>0) {
                    $add_ukuran = true;
                    foreach ($list_ukuran as $i_ukuran => $v_ukuran) {
                        if($v_ukuran["ukuran"]==$value["ukuran"]) {
                            $add_ukuran = false;
                            break;
                        }
                    }            
                    if($add_ukuran) { $list_ukuran[count($list_ukuran)]["ukuran"] = $value["ukuran"]; }
                }

                if(strlen($value["warna"])>0) {
                    $add_warna = true;
                    foreach ($list_warna as $i_warna => $v_warna) {
                        if($v_warna["warna"]==$value["warna"]) {
                            $add_warna = false;
                            break;
                        }
                    }
                    if($add_warna) { $list_warna[count($list_warna)]["warna"] = $value["warna"]; }
                }
            }
        }
        
        //CEK PRODUK
        $sql = "SELECT A.id, A.kode, A.nama, A.harga_modal AS harga_beli, ".(count($data_user)>0?"IF(C.harga_jual IS NOT NULL, C.harga_jual, A.harga_jual) AS harga_jual_khusus":"A.harga_jual").", A.harga_diskon, A.persen_diskon, A.berat, IF(A.harga_diskon>0 AND IF(A.from_date_harga_diskon IS NOT NULL, A.from_date_harga_diskon<=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1) AND IF(A.to_date_harga_diskon IS NOT NULL, A.to_date_harga_diskon>=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1), 1, 0) AS harga_promo, IF(A.persen_diskon>0 AND IF(A.from_date_persen_diskon IS NOT NULL, A.from_date_persen_diskon<=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1) AND IF(A.to_date_persen_diskon IS NOT NULL, A.to_date_persen_diskon>=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1), 1, 0) AS diskon_promo FROM produk AS A".(count($data_user)>0?" LEFT JOIN (SELECT id_produk, harga_jual FROM harga_jual_user WHERE tipe_user='$tipe_user' AND harga_jual>0 GROUP BY id_produk) AS C ON C.id_produk=A.id":"")." WHERE A.id='".$id_produk."'";
        $db->mysql_query($sql, $rec_count, $data);
        if($rec_count>0) {
            $data_grosir = array();
            $sql = "SELECT * FROM produk_grosir WHERE id_produk='".$id_produk."' AND jumlah_min<='$qty_komulatif' ORDER BY jumlah_min DESC LIMIT 0, 1";
            $db->mysql_query($sql, $rec_count, $data_grosir);
            
            $data[0]["persen_diskon"] = $data[0]["diskon_promo"]==1?$data[0]["persen_diskon"]:0;
            $data[0]["harga_diskon"]  = $data[0]["harga_promo"]==1?$data[0]["harga_diskon"]:0;
            $data[0]["harga_jual"]    = count($data_grosir)>0?$data_grosir[0]["harga"]:($data[0]["harga_diskon"]>0?$data[0]["harga_diskon"]:$data[0][count($data_user)==0?"harga_jual":"harga_jual_khusus"]);
            $data[0]["subtotal"]      = $data[0]["harga_jual"]-($data[0]["harga_jual"]*$data[0]["persen_diskon"]*0.01);    
            $data[0]["grandtotal"]    = $qty*$data[0]["subtotal"];

            $key = count($cart);
            $cart[$key]["id"]            = $produk_keep_value["id_produk"];
            $cart[$key]["ukuran"]        = $produk_keep_value["ukuran"];
            $cart[$key]["warna"]         = $produk_keep_value["warna"];
            $cart[$key]["jumlah"]        = $produk_keep_value["qty"];
            $cart[$key]["berat"]         = $data[0]["berat"];
            $cart[$key]["harga_beli"]    = $data[0]["harga_beli"];
            $cart[$key]["harga_jual"]    = $data[0]["harga_jual"];
            $cart[$key]["harga_diskon"]  = $data[0]["harga_diskon"];
            $cart[$key]["persen_diskon"] = $data[0]["persen_diskon"];
            $cart[$key]["subtotal"]      = $data[0]["subtotal"];
            $cart[$key]["grandtotal"]    = $data[0]["grandtotal"];
            $cart[$key]["list_stok"]     = $data_ukuran_warna;
            $cart[$key]["jam"]           = $produk_keep_value["jam"];
            $cart[$key]["menit"]         = $produk_keep_value["menit"];
            $cart[$key]["detik"]         = $produk_keep_value["detik"];
            $cart[$key]["timeover"]      = $produk_keep_value["timeover"];
            
            $total+=$cart[$key]["grandtotal"];
            $total_qty+=$cart[$key]["jumlah"];
        }
    }
    
    //getExpedisiLogo
    $data_expedisi = $db->getFieldValue("ekspedisi AS A", array("A.gambar"), array("A.kode" => $_POST["kurir"]));
    
    //DATA ALAMAT
    $data_alamat = $db->getFieldValue("customer_address", array("*"), array("id_member" => $_POST["id_user"], "as_default" => 1));
    
    $db->mysql_close();
    die(json_encode(array("topics" => $cart, "qty" => $total_qty, "jumlah" => $total, "data_alamat"=> $data_alamat[0], "expedisi_logo" => $data_expedisi[0]["gambar"])));