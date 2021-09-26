<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_user_id   = $_POST["user_id"]; // = 145;
    $_reg_id    = $_POST["reg_id"];  // = "dBROntHPQv2IVIemgo4Nwh:APA91bFTOjeG3fwlhMs-bmcnzIc4XAwrMqTGaKR2taIZGQwZVx98FiqCFuNz4ZiAz2pPqM8QBs6pZIpdWIiKK4A4uMLc169hEUcpjj3V_WdKOdQ_-c9ByTavdpGKRT7yTwwwHkDVl5OV";
    
    $db->mysql_update("member", array( "gcm_regid" => $_reg_id), array("id" => $_user_id));

    $gcmRegIds = array();
    array_push($gcmRegIds, $_reg_id);
    include $root."includes/php/GCM.php";    
    $gcm = new GCM();
    $groupmsg = $db->getFieldValue("groupmsg", array("id", "notif_key", "notif_name"));
    foreach($groupmsg as $key => $value) {
        $notif_key = $value["notif_key"];

        //check if exsist
        $result = $gcm->getkeygroup($value["notif_name"]);
        if(!isset($result["notification_key"])) {
            $notif_key = "";
        }

	    if(strlen($notif_key)==0) {
	        //echo("Create Group " .$value["notif_name"]. "...<br />");
            $result = $gcm->creategroup($gcmRegIds, $value["notif_name"]);
            if(isset($result["notification_key"])) {
		        //echo("Group Created with key: ".$result["notification_key"]."<br />");
                $db->mysql_update("groupmsg", array( "notif_key" => $result["notification_key"]), array("id" => $value["id"]));
            } else

            //group already created!
            if(trim($result["error"])=="notification_key already exists") {
		        //echo("Group already Create. Getting key...<br />");
                $result = $gcm->getkeygroup($value["notif_name"]);
                if(isset($result["notification_key"])) {
		            //echo("key Get: ". $result["notification_key"] ."<br />");
                    $db->mysql_update("groupmsg", array( "notif_key" => $result["notification_key"]), array("id" => $value["id"]));
                }
            }
        } else {
            //add device to group
	        //echo("add device to group...<br />");
            $result = $gcm->addtogroup($gcmRegIds, $value["notif_key"], $value["notif_name"]);
            if(isset($result["notification_key"])) {
                //echo ("done with key ".$result["notification_key"]."!");
            }
        }
    }

    $db->mysql_close();
    die(json_encode(array("success" => true)));