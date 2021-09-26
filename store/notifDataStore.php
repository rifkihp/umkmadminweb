<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();
    
    if(!isset($_SESSION[ADMIN_SESSION_NAME])) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kesalahan login! Silahkan logout.")));
    }
    
    //NOTIFIKASI KOMENTAR (halaman message!)
    $id_head_komentar = isset($_POST["id_head_komentar"])?$_POST["id_head_komentar"]:0;
    $last_id_komentar = isset($_POST["last_id_komentar"])?$_POST["last_id_komentar"]:0;
    
    if($id_head_komentar>0) {
        $list_komentar = $db->getFieldValue(
            "message AS A LEFT JOIN 
            admin_users AS B ON A.from=B.id LEFT JOIN     
            member AS C ON A.from=C.id LEFT JOIN     
            guest AS D ON A.from=D.id", 
            array(
                "A.id", 
                "A.pesan AS komentar", 
                "A.tanggal_jam", 
                "IF(A.grup=1, 1, 0) AS is_self", 
                "DATE_FORMAT(A.tanggal_jam, '%d-%m-%Y %H:%i:%s') AS tanggal_komentar", 
                "IF(A.grup=1, B.nama, IF(A.grup=2, TRIM(CONCAT(C.first_name, ' ', C.last_name)), CONCAT('Guest ', D.id)))  AS nama", 
                "IF(A.grup=1, 'admin.png', IF(A.grup=2, C.photo, 'default.png'))  AS photo",
                "IF(A.grup<>1 AND A.user_read=0, 'new', '') AS is_new_komentar"
            ), 
            array(
                "A.id_head" => $id_head_komentar
            ), 
            array(), 0, 0, " A.id ", " A.id>$last_id_komentar AND A.grup<>1 "
        );

        foreach ($list_komentar as $key => $value) {
            if($value["is_new_komentar"]=='new') { $db->mysql_update("message", array("user_read" => 1), array("id" => $value["id"])); }
            $last_id_komentar = $value["id"];
        }
    }
    $data_komentar = array(
        "last_id_komentar" => $last_id_komentar,
        "list_new_komentar" => $list_komentar
    );
    
    //PESANAN BELUM LUNAS
    $total_belum_lunas = $db->getFieldValue("customer_order_header", array("COUNT(*) AS TOTAL"), array(), array(), 0, 0, "", "status IN (0, 1)");
        
    //PESANAN SUDAH KONFIRMASI PEMBAYARAN
    $total_konfirmasi_bayar = $db->getFieldValue("customer_order_header", array("COUNT(*) AS TOTAL"), array("status" => 3));
    
    //PESANAN PERLU DIKEMAS
    $total_perlu_kemas = $db->getFieldValue("customer_order_header", array("COUNT(*) AS TOTAL"), array("status" => 2));
    
    //NOTIF PELANGGAN BARU
    $total_new_pelanggan = $db->getFieldValue("member AS A", array("COUNT(*) AS TOTAL"), array("A.is_open" => 0));
    
    //NOTIF MESSAGE
    $total_new_message = $db->getFieldValue("message AS A", array("COUNT(*) AS TOTAL"), array("A.user_read" => 0), array(), 0, 0, "", "A.grup<>1");
    
    $db->mysql_close();
    $result = array(
        "success" => true,
        "data_komentar" => $data_komentar,
        
        "total_belum_lunas" => $total_belum_lunas[0]["TOTAL"],
        "total_konfirmasi_bayar" => $total_konfirmasi_bayar[0]["TOTAL"],
        "total_perlu_kemas" => $total_perlu_kemas[0]["TOTAL"],
        "total_pelanggan_baru" => $total_new_pelanggan[0]["TOTAL"],
        "total_pesan_baru" => $total_new_message[0]["TOTAL"]
    );
    
    
    die(json_encode($result));