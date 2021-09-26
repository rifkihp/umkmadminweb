<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();
    
    $id = explode(",", $_POST["id"]);
    $data = $db->getFieldValue("shortcut", array("icon"), array("id" => $id));
    foreach ($data as $key => $value) {    
        if(file_exists(realpath($root)."/uploads/shortcut/".$value["icon"]) && $value["icon"]!="default.png") {
            unlink(realpath($root)."/uploads/shortcut/".$value["icon"]);
        }
    }
    $db->mysql_delete("shortcut", array("id" => $id));
        
    $db->mysql_close();
    $_SESSION["alert_success"] = "Hapus data shortcut berhasil.";
    die(json_encode(array("success" => true, "message" => "Hapus data shortcut berhasil.")));