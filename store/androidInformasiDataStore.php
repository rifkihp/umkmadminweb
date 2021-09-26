<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    //TIPE USER
    $data_user = $db->getFieldValue("member", array("*"), array("id" => $_POST["id_user"]));
    $tipe_user = count($data_user)>0?$data_user[0]["jenis_user"]:0;
    
    $_limit    = 10;
    $_page     = $_POST["page"];
    
    $db->mysql_delete("informasi_unread", array("id_member" => $_POST["id_user"]));
    
    //get total
    $sql = "SELECT COUNT(*) AS TOTAL FROM informasi AS A";
    $db->mysql_query($sql, $rec_count, $rs);
    $nbrows = $rs[0]["TOTAL"];
    $data = array();
    if($nbrows>0) {
        $data = $db->getFieldValue("informasi AS A", array("A.id", "DATE_FORMAT(A.tanggal, '%d-%m-%Y') AS tanggal", "A.judul", "A.konten", "A.gambar"), array(), array(), $_limit, $_limit*($_page-1), " A.tanggal DESC "); 
        foreach($data as $key => $value) {
            //$data[$key]["tanggal"] = $db->dateDiff(date("Y-m-d H:i:s"), $value["tanggal"]);
            $data[$key]["header"]  = preg_replace( "/\r|\n/", "", $db->limitTextKonten($value["konten"], 150));
        }
    }
    
    if($_POST["id_user"]>0) {
        //total daftar pesanan
        $data_total_pesanan = $db->getFieldValue("customer_order_header AS A", array("COUNT(*) AS TOTAL"), array("A.id_member" => $_POST["id_user"]), array(), 0, 0, "A.status IN (0, 3, 2, 6)");

        //total informasi
        $data_total_informasi = $db->getFieldValue("informasi_unread AS A", array("COUNT(*) AS TOTAL"), array("A.id_member" => $_POST["id_user"]));
    } else {
        $data_total_pesanan[0]["TOTAL"] = 0;
        $data_total_informasi[0]["TOTAL"] = 0;
    }
    $db->mysql_close();
    
    $rasult = array(
        "totalCount" => $nbrows,
        "topics" => $data,
        "next_page" => $_page+(count($data)==0?0:1),
        "total_daftar_pesanan" => $data_total_pesanan[0]["TOTAL"], 
        "total_informasi" => $data_total_informasi[0]["TOTAL"] 
    );
    
    die(json_encode($rasult));