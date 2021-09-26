<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_userId   = $_POST["user_id"];
    $_alamatId = $_POST["alamat_id"];

    $db->mysql_update("customer_address", array("as_default" => 0), array("id_member" => $_userId));
    $db->mysql_update("customer_address", array("as_default" => 1), array("id" => $_alamatId));
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "message" => "Proses utamakan alamat berhasil.")));