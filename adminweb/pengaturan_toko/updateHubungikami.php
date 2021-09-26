<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //INSERT NO_HP
    $db->mysql_delete("umum_contact", array("tipe" => "no_hp"));
    $row = explode("\t", $_POST["no_hp"]); 
    foreach($row as $i => $value) {
        if(strlen($value)>0) {
            $db->mysql_insert("umum_contact", array(
                "contact" => $value,
                "tipe" => "no_hp"
            ));
        }
    }
    unset($_POST["no_hp"]);
    
    //INSERT WA
    $db->mysql_delete("umum_contact", array("tipe" => "wa"));
    $row = explode("\t", $_POST["wa"]); 
    foreach($row as $i => $value) {
        if(strlen($value)>0) {
            $db->mysql_insert("umum_contact", array(
                "contact" => $value,
                "tipe" => "wa"
            ));
        }
    }
    unset($_POST["wa"]);
    
    //INSERT SMS
    $db->mysql_delete("umum_contact", array("tipe" => "sms"));
    $row = explode("\t", $_POST["sms"]); 
    foreach($row as $i => $value) {
        if(strlen($value)>0) {
            $db->mysql_insert("umum_contact", array(
                "contact" => $value,
                "tipe" => "sms"
            ));
        }
    }
    unset($_POST["sms"]);
    
    //INSERT BBM
    $db->mysql_delete("umum_contact", array("tipe" => "bbm"));
    $row = explode("\t", $_POST["bbm"]); 
    foreach($row as $i => $value) {
        if(strlen($value)>0) {
            $db->mysql_insert("umum_contact", array(
                "contact" => $value,
                "tipe" => "bbm"
            ));
        }
    }
    unset($_POST["bbm"]);
    
    //INSERT LINE
    $db->mysql_delete("umum_contact", array("tipe" => "line"));
    $row = explode("\t", $_POST["line"]); 
    foreach($row as $i => $value) {
        if(strlen($value)>0) {
            $db->mysql_insert("umum_contact", array(
                "contact" => $value,
                "tipe" => "line"
            ));
        }
    }
    unset($_POST["line"]);
    
    //update data umum
    $db->mysql_update("umum", $_POST);
    
    
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "message" => "Update hubungi kami berhasil.")));