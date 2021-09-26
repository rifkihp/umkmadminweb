<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $db->mysql_update("fcm_token", array("token" => $_POST["token"]));
    $db->mysql_close();
    
    die(json_encode(array("success" => true)));