<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    for($i=0; $i<6; $i++) {
        sleep(10);

        $data = $db->getFieldValue("channel_msg_send AS A", array("A.*"), array("A.status" => "WAITING"), array(), 50, 0, " A.id ");
        foreach($data as $value) {
            echo($db->sendSms($value["no_hp"], $value["msg"]));
            $db->mysql_update("channel_msg_send", array("status" => "DONE"), array("id" => $value["id"]));
        }
    }
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "create" => date("Y-m-d H:i:s"))));