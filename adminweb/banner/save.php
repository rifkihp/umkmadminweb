<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    //validasi-validasi
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama harus diisi.")));
    }
    
    if(strlen($_POST['filename_banner'])>0) {
        $img = $_POST['filename_banner'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $upload_directory=realpath($root) . "/uploads/banner/";            
        $_POST["filename"] = $db->create_kode_unik(4).".png";
        file_put_contents($upload_directory.$_POST["filename"], $data);
    }
    unset($_POST['filename_banner']);
    
    //get last id kategori
    $_POST["id"] = $db->getLastNumber("banner", "id");
    
    //INSERT CATEGORY
    if(strlen($_POST["id_kategori"])>0) {
        $kategori = explode(",", $_POST["id_kategori"]);
        foreach($kategori as $i => $value) {
            $db->mysql_insert("banner_to_category", array(
                "id_banner" => $_POST["id"],
                "id_kategori" => $value
            ));        
        }
    }
    unset($_POST["id_kategori"]);
    
    //insert banner
    $db->mysql_insert("banner", $_POST);
    
    $_SESSION["alert_success"] = "Tambah banner berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));