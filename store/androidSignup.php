<?php

    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);
    
    //PROFIL
    $_first_name     = $_POST["first_name"];
    $_last_name      = $_POST["last_name"];
    $_nohp           = $_POST["no_hp"];
    $_email          = $_POST["email"];
    $_username       = $_POST["username"];
    $_referensi      = $_POST["referensi"];
    $_password       = $_POST["password"];
    $_konfirmasi     = $_POST["konfirmasi"];

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
    $_tipe           = $_POST["tipe"];

    $_error_message = "";
    
    $_result = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("phone" => $_nohp));
    if($_result[0]["TOTAL"]>0) {
        $_error_message.= "No. handphone sudah digunakan.\n";
    }

    if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $_error_message.= "Penulisan email tidak valid.\n";
    } else {
        $_result = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("email" => $_email));
        if($_result[0]["TOTAL"]>0) {
            $_error_message.= "Email sudah digunakan.\n";
        }
    }

    $_result = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("username" => $_username));
    if($_result[0]["TOTAL"]>0) {
        $_error_message.= "Username sudah digunakan.\n";
    }
    
    if(strlen(trim($_referensi))>0) {
        $_data_referensi = $db->getFieldValue("member", array("id", "username"), array("username" => $_referensi));
        if(count($_data_referensi)==0) {
            $_error_message.= "Username referensi tidak sah.\n";
        }
    }
    
    if(strlen($_password)<6) {
        $_error_message.= "Password minimal 6 karater.\n";
    } else if($_password!=$_konfirmasi) {
        $_error_message.= "Konfirmasi tidak sesuai dengan password.\n";
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

    //UPLOAD PHOTO
    $_photo = "default.png";
    if(!empty($_FILES["photo"])) {
        $file = $_FILES["photo"];
        $ext = substr($file['name'], strrpos($file['name'], '.') + 1); 
        $_photo = $mcrypt->encrypt(generateCode(4)).'.'.$ext;
        $upload_directory = realpath($root) . "/uploads/member";
        move_uploaded_file($file['tmp_name'], $upload_directory."/".$_photo);
    } else {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Anda belum memasukan photo.")));     
    }

    //GET LAST ID MEMBER
    $id = $db->getLastNumber("member", "id");
    
    //INSERT MEMBER
    $db->mysql_insert("member", array(
        "id" => $id,
        "first_name" => $_first_name,
        "last_name" => $_last_name,
        "username" => $_username,
        "phone" => $_nohp,
        "email" => $_email,
        "referensi_id" => strlen(trim($_referensi))>0?$_data_referensi[0]["id"]:0,
        "password" => $mcrypt->encrypt($_password),         
        "jenis_user" => 1,
        "photo" => $_photo,
        "tipe" => $_tipe,
        "tanggal_jam_create" => date('Y-m-d H:i:s'),
        "aktif" => 1, 
        "admin" => 1
    ));
    
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
            "nama_kota"      =>  $_nama_kota,        
            "id_kecamatan"   => $_id_kecamatan,
            "nama_kecamatan" =>  $_nama_kecamatan,
            "kode_pos"       => $_kode_pos,
            "as_default"     => 1
        )
    );
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "message" => "Proses daftar berhasil.")));