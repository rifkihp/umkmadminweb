<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama shortcut harus diisi.")));
    }
    
    /*$data = $db->getFieldValue("shortcut", array("icon"), array("id" => $_POST["id"]));
    $filename = $data[0]["icon"];
    if(strlen($_POST['filename_gambar'])>0) {
        $img = $_POST['filename_gambar'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $upload_directory=realpath($root) . "/uploads/shortcut/";            
        $filename = strtolower($db->URL_CovertString($_POST["nama"]))."_".$db->create_kode_unik(4).".png";
        file_put_contents($upload_directory.$filename, $data);
    }
    unset($_POST['filename_gambar']);
    $_POST["icon"] = $filename;
    
    if(file_exists(realpath($root)."/uploads/shortcut/".$data[0]["icon"]) && $data[0]["icon"]!="default.png") {
        unlink(realpath($root)."/uploads/shortcut/".$data[0]["icon"]);
    }*/
    
    $data = $db->getFieldValue(
        "shortcut", 
        array(
            "icon"
        ), 
        array("id" => $_POST["id"])
    );
    
    if(strlen($data[0]["icon"])>0 && $data[0]["icon"]!="default.png" && file_exists(realpath($root)."/uploads/shortcut/".$data[0]["icon"])) {
        unlink(realpath($root)."/uploads/shortcut/".$data[0]["icon"]);
    }
    
    //insert data shortcut
    $db->mysql_update("shortcut", $_POST, array("id" => $_POST["id"]));
    
    $_SESSION["alert_success"] = "Edit shortcut berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));