<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $row = explode("\t", $_POST["message"]);
    foreach($row as $i => $value) {
        $col = explode("|", $value);    
        $id          = $col[0];
        $messageId   = $col[1];
        $messageDate = $col[2];
        $tanggal_jam = $col[3];
        if($messageId>0) {
            $db->mysql_update("channel_send", array("status" => "ON PROCESS", "messagedate" => $messageDate, "tanggal_jam" => $tanggal_jam, "message_id" => $messageId), array("id" => $id));
        }
    }
        
    $db->mysql_close();
    
    $topics = array(
        "success" => true,
        "message" => "Proses kirim pesan berhasil."
    );
    
    die(json_encode($topics));