<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);

    $gcmRegIds = array();
    $data_mitra = $db->getFieldValue("member", array("gcm_regid"), array("id" => $_POST["id_user"]));
    foreach ($data_mitra as $key => $value) {
        if(strlen($value['gcm_regid'])>0) array_push($gcmRegIds, $value['gcm_regid']);
    }
    if(count($gcmRegIds)>0) {
        include $root."includes/php/GCM.php";    
        $gcm = new GCM();
        $groupmsg = $db->getFieldValue("groupmsg", array("id", "notif_key", "notif_name"));
        foreach($groupmsg as $key => $value) {
            if(strlen($value["notif_key"])>0) {
                $result = $gcm->removefromgroup($gcmRegIds, $value["notif_key"], $value["notif_name"]);
                if(isset($result["notification_key"])) {
                    echo ("done with key ".$result["notification_key"]."!");
                }    
            }
        }
        
    }

    $db->mysql_update("member", array("gcm_regid" => ""), array("id" => $_POST["id_user"]));
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "message" => "Anda berhasil keluar.")));