<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $id_mitra  = 145;
    $id_header = 120;

    //NOTIFIKASI TO ADMIN & TERAPIS
    $gcmRegIds = array();
    
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
        $result = $gcm->sendmsg($gcmRegIds, array("tipe" => "orderbaru", "notif_id" => $notif_id, "message" => $message));
        $db->mysql_insert(
            "push_notification", 
            array(
                "notif_id" => $notif_id,
                "tipe" => "orderbaru",
                "message" => $message,
                "result" => json_encode($result)
            )
        );

        echo(json_encode($result));
    }
    
    $db->mysql_close();