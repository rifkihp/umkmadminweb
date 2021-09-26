<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

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
    
    $filename = "default_bg.png";
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
    
    //DELETE OLD LOGO
    $data = $db->getFieldValue("umum", array("avatar", "logo", "bg"));
    if(file_exists(realpath($root)."/uploads/umum/".$data[0]["avatar"]) && $data[0]["avatar"]!="default_avatar.png") {
        unlink(realpath($root)."/uploads/umum/".$data[0]["avatar"]);
    }
    
    if(file_exists(realpath($root)."/uploads/umum/".$data[0]["logo"]) && $data[0]["logo"]!="default_logo.png") {
        unlink(realpath($root)."/uploads/umum/".$data[0]["logo"]);
    }
    
    if(file_exists(realpath($root)."/uploads/umum/".$data[0]["bg"]) && $data[0]["bg"]!="default_bg.png") {
        unlink(realpath($root)."/uploads/umum/".$data[0]["bg"]);
    }
    
    //update data general 1
    $db->mysql_update("umum", $_POST);
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "message" => "Update general 1 berhasil.")));