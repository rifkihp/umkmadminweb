<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();
    
    $id = ($db->checkIntegerRange($_POST["id"])?$_POST["id"]:"");
    $status = ($db->checkIntegerRange($_POST["status"])?$_POST["status"]:"");
    $tanggal_jam =  date("Y-m-d H:i:s");
    
    //get data kode pemesanan
    $data_konfirmasi = $db->getFieldValue("konfirmasi_pembayaran", array("id", "id_member", "kode_pemesanan", "jumlah_transfer", "status"), array("id" => $id));
    
    $prefix = substr($data_konfirmasi[0]["kode_pemesanan"], 0, 3);
    
    //get data pemesanan
    if($prefix=="DPT") {
        $data = $db->getFieldValue("ppob_trx_deposit", array("id", "kode", "id_member", "total"), array("kode" => $data_konfirmasi[0]["kode_pemesanan"]));
    } else {
        $data = $db->getFieldValue("customer_order_header", array("id", "kode", "id_member", "email_notifikasi", "is_dropship"), array("kode" => $data_konfirmasi[0]["kode_pemesanan"]));
    }
    
    //VALIDASI
    if($status==2) {
        if(count($data)==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode transaksi tidak ditemukan!")));        
        }
        
        $sql = "SELECT COUNT(*) AS TOTAL FROM konfirmasi_pembayaran WHERE id_header='".$data[0]["id"]."' AND status='".$status."'";
        $db->mysql_query($sql, $rec_count, $rs);
        if($rs[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode transaksi sudah dikonfirmasi!")));        
        }
        
        if($prefix=="DPT") {
            //SALDO MEMBER NAMBAH
            $sql = "UPDATE member SET saldo=saldo+".$data[0]["total"]." WHERE id=".$data[0]["id_member"];
            $db->mysql_execute($sql);
            
            //HISTORI TRANSAKSI
            $db->mysql_insert("h_trx", array(
                "id_member" => $data[0]["id_member"],
                "kode"   => "DPT",
                "jenis"  => "K",
                "id_ref" => $data[0]["id"],
                "jumlah" => $data[0]["total"],
                "tanggal_jam" => $tanggal_jam
            ));
            
        } else {
            //UPDATE PRODUK VARIAN
            $detail = $db->getFieldValue("customer_order_detail", array("*"), array("id_header" => $data[0]["id"]));
            foreach ($detail as $key => $value) {
                if($data[0]["is_dropship"]=="Y") {
                    $db->mysql_update(
                        "produk_varian", 
                        array(
                            "dropship" => "(dropship+".$value["jumlah"].")", 
                            "keep" => "(keep-".$value["jumlah"].")"), 
                        array(
                            "id_produk" => $value["id_produk"], 
                            "ukuran" => $value["ukuran"],
                            "warna" => $value["warna"]), 
                        array(
                            "dropship", 
                            "keep")
                    );
                } else {
                    $db->mysql_update(
                        "produk_varian", 
                        array(
                            "terjual" => "(terjual+".$value["jumlah"].")", 
                            "keep" => "(keep-".$value["jumlah"].")"), 
                        array(
                            "id_produk" => $value["id_produk"], 
                            "ukuran" => $value["ukuran"],
                            "warna" => $value["warna"]), 
                        array(
                            "terjual", 
                            "keep")
                    );
                }
            }
        }
    }
    
    if($status==1) {
        if($data_konfirmasi[0]["status"]==2) {
            //SALDO MEMBER BERKURANG
            $sql = "UPDATE member SET saldo=saldo-".$data[0]["total"]." WHERE id=".$data[0]["id_member"];
            $db->mysql_execute($sql);
            
            //HISTORI TRANSAKSI
            $db->mysql_insert("h_trx", array(
                "id_member" => $data[0]["id_member"],
                "kode"   => "DPT",
                "jenis"  => "D",
                "id_ref" => $data[0]["id"],
                "jumlah" => $data[0]["total"],
                "tanggal_jam" => $tanggal_jam
            ));
        }
    }
    
    $db->mysql_update(
        "konfirmasi_pembayaran", 
        array(
            "id_header" => $data[0]["id"],
            "status" => $status,
            "tanggal_jam_update_status" => $tanggal_jam
        ),      
        array("id" => $id)
    );
    
    if(count($data)>0) {
        //INSERT HISTORI PEMESANAN
        $db->mysql_insert("histori_status_pemesanan", array(
            "id" => $db->getLastNumber("histori_status_pemesanan", "id"),
            "id_pemesanan" => $data[0]["id"],
            "tanggal_jam" => $tanggal_jam,
            "penjelasan" => $status==2?"Admin menerima pembayaran customer.":"Admin menolak pembayaran customer."
        ));
        
        if($prefix=="DPT") {
            $db->mysql_update("ppob_trx_deposit", array("status" => $status, "date_update_status" => date("Y-m-d H:i:s")), array("id" => $data[0]["id"]));
        } else {
            $db->mysql_update("customer_order_header", array("status" => $status, "date_update_status" => date("Y-m-d H:i:s"), "is_open" => "N"), array("id" => $data[0]["id"]));
        }
        
        //PUSH NOTIFICATION TO USER
        /*$data_member = $db->getFieldValue("member", array("CONCAT(first_name, ' ', last_name) AS nama", "email",  "gcm_regid"), array("id" => $data_konfirmasi[0]["id_member"]));
        include $root."includes/php/GCM.php";    
        $gcm = new GCM();            
        
        $gcmRegIds = array();
        foreach ($data_member as $key => $value) {
            if(strlen($value["gcm_regid"])>0) {
                array_push($gcmRegIds, $value['gcm_regid']);
            }
        }
        if(count($gcmRegIds)>0) {
            $message = json_encode(
                array(
                    "success" => true,
                    "from" => "Admin: ".$data_umum[0]["website"],
                    "judul" => $subject,
                    "message" => "",
                    "tanggal_jam" => $tanggal_jam
                )
            );            
            $result = $gcm->send_notification($gcmRegIds, array("tipe" => "notifikasi", "message" => $message));
            $db->mysql_update(
                "message", 
                array(
                    "push_result" => $result           
                ),
                array("id" => $id)
            );
        }*/
    }
    
    $db->mysql_close();
    die(json_encode(array("success" => true)));