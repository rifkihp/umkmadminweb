<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);

    $id_user = $_POST["id_user"];
    $id_trx  = $_POST["id_trx"];
    $status  = $_POST["status"];
    
    $db->mysql_update("customer_order_header", array("status" => $status), array("id" => $id_trx));

    //NOTIFIKASI TO ADMIN, MITRA & KONSUMEN
    $gcmRegIds = array();

    $data_user = $db->getFieldValue("member", array("gcm_regid"), array("id" => $id_user));
    foreach ($data_user as $key => $value) {
        if(strlen($value['gcm_regid'])>0) array_push($gcmRegIds, $value['gcm_regid']);
    }

    $data_mitra = $db->getFieldValue(
        "member AS A LEFT JOIN customer_order_header AS B ON A.id=B.id_mitra", 
        array("A.gcm_regid"), array("B.id" => $id_trx));
    foreach ($data_mitra as $key => $value) {
        if(strlen($value['gcm_regid'])>0) array_push($gcmRegIds, $value['gcm_regid']);
    }

    $data_admin = $db->getFieldValue("member", array("gcm_regid"), array("tipe" => 2));
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
            array("A.id" => $id_trx)
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
    
    die(json_encode(array("success" => true, "message" => "Proses update transaksi berhasil.")));