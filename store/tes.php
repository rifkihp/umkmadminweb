<?php
$root = "../";
    include $root."includes/php/GCM.php";    
    $gcm = new GCM();

    $result   = $gcm->get_group_notification_key("kamOn-Notifikasi");
    $data = json_decode($result, true);

    $gcmRegIds = array();
    if($data["error"]=="notification_key not found") {
        array_push($gcmRegIds, "dBROntHPQv2IVIemgo4Nwh:APA91bFTOjeG3fwlhMs-bmcnzIc4XAwrMqTGaKR2taIZGQwZVx98FiqCFuNz4ZiAz2pPqM8QBs6pZIpdWIiKK4A4uMLc169hEUcpjj3V_WdKOdQ_-c9ByTavdpGKRT7yTwwwHkDVl5OV");
        $result = $gcm->create_group_notification($gcmRegIds, "kamOn-Notifikasi"); 
        $data = json_decode($result, true);

        echo("group created!<br />");
        print_r($data);
    } else {
        

        echo("group found!<br />");
        print_r($data);
    }
    
        