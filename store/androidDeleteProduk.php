<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);

    $data_produk = $db->getFieldValue("produk", array("gambar_utama AS photo"), array("id" => $_POST["id_produk"]));
    if(file_exists(realpath($root)."/uploads/produk/".$data_produk[0]["photo"]) && $data_produk[0]["photo"]!='default.png') {
        unlink(realpath($root)."/uploads/produk/".$data_produk[0]["photo"]);
    }
    $db->mysql_delete("produk", array("id" => $_POST["id_produk"]));
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "message" => "Proses hapus produk berhasil.")));