<?php

    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $isEdit          = $_POST["id_mitra"]!="0";

    //PROFIL
    $_first_name     = $_POST["first_name"];
    $_last_name      = $_POST["last_name"];
    $_nohp           = $_POST["no_hp"];
    $_email          = $_POST["email"];
    $_username       = $_POST["username"];
    $_referensi      = $_POST["referensi"];
    $_password       = $_POST["password"];
    $_aktif          = $_POST["aktif"];

    //ALAMAT
    $_alamat         = $_POST["alamat"];
    $_latitude       = $_POST["latitude"];
    $_longitude      = $_POST["longitude"];
    $_id_propinsi    = $_POST["id_propinsi"];
    $_nama_propinsi  = $_POST["nama_propinsi"];
    $_id_kota        = $_POST["id_kota"];
    $_nama_kota      = $_POST["nama_kota"];
    $_id_kecamatan   = $_POST["id_kecamatan"];
    $_nama_kecamatan = $_POST["nama_kecamatan"];
    $_kode_pos       = $_POST["kode_pos"];

    $_error_message = "";
    
    $_result = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("phone" => $_nohp), array(), 0, 0, "", "id<>'".$_POST["id_mitra"]."'");
    if($_result[0]["TOTAL"]>0) {
        $_error_message.= "No. handphone sudah digunakan.\n";
    }

    if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $_error_message.= "Penulisan email tidak valid.\n";
    } else {
        $_result = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("email" => $_email), array(), 0, 0, "", "id<>'".$_POST["id_mitra"]."'");
        if($_result[0]["TOTAL"]>0) {
            $_error_message.= "Email sudah digunakan.\n";
        }
    }

    $_result = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("username" => $_username), array(), 0, 0, "", "id<>'".$_POST["id_mitra"]."'");
    if($_result[0]["TOTAL"]>0) {
        $_error_message.= "Username sudah digunakan.\n";
    }
        
    if(strlen($_password)<6) {
        $_error_message.= "Password minimal 6 karater.\n";
    }
    
    if(strlen($_error_message)>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => $_error_message)));
    }

    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();

    function generateCode($characters) {
        $possible = '23456789bcdfhkmnrstvwx';
        $code = '';
        $i = 0;
        while ($i < $characters) {
            $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $i++;
        }
        return $code;
    }

    //DATA MITRA
    if($isEdit) {
        $data_mitra = $db->getFieldValue("member", array("photo"), array("id" => $_POST["id_mitra"]));
        $_photo = $data_mitra[0]["photo"];        
    } else {
        $_photo = "default.png";
    }
    
    //UPLOAD PHOTO
    if(!empty($_FILES["photo"])) {
        //DIHAPUS DULU YANG LAMA
        if(file_exists(realpath($root)."/uploads/member/".$_photo) && $_photo!='default.png') {
            unlink(realpath($root)."/uploads/member/".$_photo);
        }

        $file = $_FILES["photo"];
        $ext = substr($file['name'], strrpos($file['name'], '.') + 1); 
        $_photo = $mcrypt->encrypt(generateCode(4)).'.'.$ext;
        $upload_directory = realpath($root) . "/uploads/member";
        move_uploaded_file($file['tmp_name'], $upload_directory."/".$_photo);
    } else if(!$isEdit) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Anda belum memasukan photo.")));     
    }

    //GET LAST ID MEMBER
    $id = $isEdit?$_POST["id_mitra"]:$db->getLastNumber("member", "id");
    
    if(!$isEdit) {
        //INSERT MEMBER
        $db->mysql_insert(
            "member", 
            array(
                "id" => $id,
                "first_name"         => $_first_name,
                "last_name"          => $_last_name,
                "username"           => $_username,
                "phone"              => $_nohp,
                "email"              => $_email,
                "referensi_id"       => strlen(trim($_referensi))>0?$_data_referensi[0]["id"]:0,
                "password"           => $mcrypt->encrypt($_password),         
                "jenis_user"         => 1,
                "photo"              => $_photo,
                "tipe"               => 1,
                "tanggal_jam_create" => date('Y-m-d H:i:s'),
                "aktif"              => $_aktif, 
                "admin"              => 1
            )
        );
        
        //INSERT ALAMAT
        $db->mysql_insert(
            "customer_address", 
            array(
                "id_member"      => $id,
                "nama"           => trim($_first_name ." ". $_last_name),
                "alamat"         => $_alamat,
                "latitude"       => $_latitude,
                "longitude"      => $_longitude,
                "no_hp"          => $_nohp,
                "id_propinsi"    => $_id_propinsi,
                "nama_propinsi"  => $_nama_propinsi,
                "id_kota"        => $_id_kota,
                "nama_kota"      => $_nama_kota,        
                "id_kecamatan"   => $_id_kecamatan,
                "nama_kecamatan" => $_nama_kecamatan,
                "kode_pos"       => $_kode_pos,
                "as_default"     => 1
            )
        );
    } else {
        //UPDATE MEMBER
        $db->mysql_update(
            "member", 
            array(
                "first_name"         => $_first_name,
                "last_name"          => $_last_name,
                "username"           => $_username,
                "phone"              => $_nohp,
                "email"              => $_email,
                "referensi_id"       => strlen(trim($_referensi))>0?$_data_referensi[0]["id"]:0,
                "password"           => $mcrypt->encrypt($_password),         
                "jenis_user"         => 1,
                "photo"              => $_photo,
                "tipe"               => 1,
                "aktif"              => $_aktif, 
                "admin"              => 1
            ),
            array(
                "id" => $id
            )
        );
    
        //UPDATE ALAMAT
        $db->mysql_update(
            "customer_address", 
            array(
                "nama"           => trim($_first_name ." ". $_last_name),
                "alamat"         => $_alamat,
                "latitude"       => $_latitude,
                "longitude"      => $_longitude,
                "no_hp"          => $_nohp,
                "id_propinsi"    => $_id_propinsi,
                "nama_propinsi"  => $_nama_propinsi,
                "id_kota"        => $_id_kota,
                "nama_kota"      => $_nama_kota,        
                "id_kecamatan"   => $_id_kecamatan,
                "nama_kecamatan" => $_nama_kecamatan,
                "kode_pos"       => $_kode_pos
            ),
            array(
                "id_member"      => $id,
                "as_default"     => 1
            )
        );
    }
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "message" => "Proses simpan data berhasil.")));