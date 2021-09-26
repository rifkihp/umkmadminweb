<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $data = $db->getFieldValue("channel_send", array("id", "text"), array("status" => "WAITING", "chatId" => $_POST["chatId"]), array(), 10, 0);
    /*foreach ($data as $key => $value) {
        $db->mysql_update("channel_send", array("status" => "ON PROCESS"), array("id" => $value["id"]));
    }*/
    $db->mysql_close();
    
    $topics = array(
        "topics" => $data
    );
    
    die(json_encode($topics));