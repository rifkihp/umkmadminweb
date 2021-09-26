<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);

    $data_user = $db->getFieldValue("member", array("photo"), array("id" => $_POST["id_mitra"]));
    if(file_exists(realpath($root)."/uploads/member/".$data_user[0]["photo"]) && $data_user[0]["photo"]!='default.png') {
        unlink(realpath($root)."/uploads/member/".$data_user[0]["photo"]);
    }
    $db->mysql_delete("member", array("id" => $_POST["id_mitra"]));
    $db->mysql_delete("customer_address", array("id_member" => $_POST["id_mitra"]));
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "message" => "Proses hapus mitra berhasil.")));