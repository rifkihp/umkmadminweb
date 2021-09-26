<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $kode_trx = $_POST["kode_trx"];
    $row = explode("\n", trim($_POST["items"]));
    foreach($row as $i => $value) {
        $col = explode("\t", $value);    
        $id_produk = $col[0];
        $ukuran    = $col[1];
        $warna     = $col[2];

        $data = $db->getFieldValue("produk_keep AS A", array("A.id", "A.id_produk", "A.ukuran", "A.warna", "A.qty"), array("A.locked" => 0, "A.kode_trx" => $kode_trx, "A.id_produk" => $id_produk, "A.ukuran" => $ukuran, "A.warna" => $warna));
        $value = $data[0];
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
    die(json_encode(array("success" => true, "message" => "Proses hapus berhasil.")));