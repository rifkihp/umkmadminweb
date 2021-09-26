<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $row = explode("\t", $_POST["message"]);
    $sql_insert = "";
    foreach($row as $i => $value) {
        $col = explode("|", $value);    
        $id               = $col[0];
        $chatId           = $col[1];
        $replyToMessageId = $col[2];
        $senderUserId     = $col[3];
        $messageDate      = $col[4];
        $tanggal_jam      = $col[5];
        $text             = $col[6];

        for($i=7; $i<count($col); $i++) {
            $text.= " ".$col[$i];
        }
            
        $channel = $db->getFieldValue("channel", array("COUNT(*) AS TOTAL"), array("id" => $id));
        if($channel[0]["TOTAL"]==0) {
            $sql_insert.=(strlen($sql_insert)>0?",":"")."(".
                "'".$id."', " .
                "'".$chatId."', " .
                "'".$replyToMessageId."', " .
                "'".$senderUserId."', " .
                "'".addslashes($text)."', " .
                "'".$messageDate."', " .
                "'".$tanggal_jam."' " .
            ")";
        }
        
        $sql_update = "UPDATE `channel_send` SET channel_id='".$id."' WHERE message_id<>'".$id."' AND `text`='".addslashes($text)."' AND '".$tanggal_jam."' BETWEEN DATE_ADD(tanggal_jam, INTERVAL -30 SECOND) AND DATE_ADD(tanggal_jam, INTERVAL 600 SECOND)";
        $db->mysql_execute($sql_update);
    }
    
    if(strlen($sql_insert)>0) {
        $db->mysql_execute("INSERT INTO channel VALUES ".$sql_insert);
    }
    
    $data = $db->getFieldValue("channel", array("COALESCE(MAX(id), 0) AS lastId"), array("chatId" => $chatId));
    $db->mysql_update("channel_last_id", array("lastId" => $data[0]["lastId"]));
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "lastId" => $data[0]["lastId"])));