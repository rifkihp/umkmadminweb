<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["judul"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Judul website harus diisi.")));
    }
    
    if(strlen($_POST["tagline"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Tag line harus diisi.")));
    }
    
    if(strlen($_POST["email"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Email harus diisi.")));
    }
    
    /*if(strlen($_POST["telepon"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Telepon harus diisi.")));
    }
    
    if(strlen($_POST["no_hp"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "No HP harus diisi.")));
    }*/
    
    $filename = "default_avatar.png";
    if(strlen($_POST['filename_avatar'])>0) {
        $img = $_POST['filename_avatar'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $upload_directory=realpath($root) . "/uploads/umum/";            
        $filename = $db->create_kode_unik(4).".png";
        file_put_contents($upload_directory.$filename, $data);
    }
    unset($_POST['filename_avatar']);
    $_POST["avatar"] = $filename;
    
    $filename = "default_logo.png";
    if(strlen($_POST['filename_logo'])>0) {
        $img = $_POST['filename_logo'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $upload_directory=realpath($root) . "/uploads/umum/";            
        $filename = $db->create_kode_unik(4).".png";
        file_put_contents($upload_directory.$filename, $data);
    }
    unset($_POST['filename_logo']);
    $_POST["logo"] = $filename;
    
    $filename = "default_bg.jpg";
    if(strlen($_POST['filename_bg'])>0) {
        $img = $_POST['filename_bg'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $upload_directory=realpath($root) . "/uploads/umum/";            
        $filename = $db->create_kode_unik(4).".png";
        file_put_contents($upload_directory.$filename, $data);
    }
    unset($_POST['filename_bg']);
    $_POST["bg"] = $filename;
    
    $data = $db->getFieldValue("umum", array("logo"));
    
    //DELETE OLD LOGO
    if(file_exists(realpath($root)."/uploads/umum/".$data[0]["logo"]) && $data[0]["logo"]!="default_logo.png") {
        unlink(realpath($root)."/uploads/umum/".$data[0]["logo"]);
    }
    
    //DELETE OLD BG
    if(file_exists(realpath($root)."/uploads/umum/".$data[0]["bg"]) && $data[0]["bg"]!="default_bg.jpg") {
        unlink(realpath($root)."/uploads/umum/".$data[0]["bg"]);
    }
    
    //INSERT TELEPON
    $db->mysql_delete("umum_contact", array("tipe" => "telepon"));
    $row = explode("\t", $_POST["telepon"]); 
    foreach($row as $i => $value) {
        if(strlen($value)>0) {
            $db->mysql_insert("umum_contact", array(
                "contact" => $value,
                "tipe" => "telepon"
            ));
        }
    }
    unset($_POST["telepon"]);
    
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
    
    //update data umum
    $db->mysql_update("umum", $_POST);
    
    
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "message" => "Update umum berhasil.")));