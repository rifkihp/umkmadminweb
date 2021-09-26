<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
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
    $id_member = $_POST["id_user"];
    $data_user = $db->getFieldValue("member", array("photo"), array("id" => $id_member));
    $_photo = $data_user[0]["photo"];
    if(!empty($_FILES["photo"])) {
        $file = $_FILES["photo"];
        $ext = substr($file['name'], strrpos($file['name'], '.') + 1); 
        $_photo = $mcrypt->encrypt(generateCode(4)).'.'.$ext;
        $upload_directory = realpath($root) . "/uploads/member";
        move_uploaded_file($file['tmp_name'], $upload_directory."/".$_photo);

        if(file_exists(realpath($root)."/uploads/member/".$data_user[0]["photo"]) && $data_user[0]["photo"]!='default.png') {
            unlink(realpath($root)."/uploads/member/".$data_user[0]["photo"]);
        }
    } else {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Anda belum memasukan photo.")));     
    }

    $db->mysql_update("member", array("photo" => $_photo), array("id" => $id_member));

    $db->mysql_close();
    die(json_encode(array("success" => true, "photo" => $_photo, "message" => "Ganti photo profil berhasil.")));