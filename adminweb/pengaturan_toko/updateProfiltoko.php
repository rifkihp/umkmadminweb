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
    
    //DELETE OLD LOGO
    $data = $db->getFieldValue("umum", array("logo"));
    if(file_exists(realpath($root)."/uploads/umum/".$data[0]["logo"]) && $data[0]["logo"]!="default_logo.png") {
        unlink(realpath($root)."/uploads/umum/".$data[0]["logo"]);
    }
    
    //update data profil toko
    $db->mysql_update("umum", $_POST);
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "message" => "Update Profil toko berhasil.")));