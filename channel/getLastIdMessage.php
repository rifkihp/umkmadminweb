<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    //$data = $db->getFieldValue("channel", array("COALESCE(MAX(id), 0) AS lastId"), array("chatId" => $_POST["chatId"]));
    $data = $db->getFieldValue("channel_last_id", array("lastId"));
    $db->mysql_close();
    
    die(json_encode($data[0]));