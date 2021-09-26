<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    
    
    $data_umum = $db->getFieldValue("umum", array("hari", "jam", "menit"));
    
    $sql = "SELECT
                A.id,
                A.id_produk, 
                A.ukuran, 
                A.warna, 
                A.qty
            FROM 
                (SELECT id, id_produk, ukuran, warna, qty, timeorder, DATE_ADD(DATE_ADD(DATE_ADD(timeorder, INTERVAL ".$data_umum[0]["hari"]." DAY), INTERVAL ".$data_umum[0]["jam"]." HOUR), INTERVAL ".$data_umum[0]["menit"]." MINUTE) AS timeover, 
                DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i:%s') AS timecurrent FROM produk_keep WHERE locked=0) AS A WHERE A.timeover<=A.timecurrent";
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
    
    $db->mysql_close();