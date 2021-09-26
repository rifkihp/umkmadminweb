<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_limit = 10;
    $filter = array();
    
    //$_POST["status"] = 0: Menunggu; 1: Proses; 2: Selesai; 3: Batal;
    if($_POST["tipe"]==2) {
        $filter = array(
            "A.status" => $_POST["status"]
        );
    } else if($_POST["tipe"]==1) {
        $filter = array(
            "A.id_mitra" => $_POST["id_user"], 
            "A.status" => $_POST["status"]
        );
    } else {
        $filter = array(
            "A.id_member" => $_POST["id_user"], 
            "A.status" => $_POST["status"]
        );
    }
    $data = $db->getFieldValue("
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
        "DATE_FORMAT(E.tanggal_terapi, '%d-%m-%Y') AS tanggal_terapi", 
        "E.jam_terapi"
    ), 
    $filter,
    array(), $_limit, $_limit*($_POST["page"]-1), " A.id DESC ");
    
    $db->mysql_close();
    $result = array(  
        "topics" => $data,
        "next_page" => $_POST["page"]+(count($data)==0?0:1)
    );
    die(json_encode($result));