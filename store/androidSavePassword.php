<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $id_member = $_POST["id_user"];
    $_message = array();
    $data_user = $db->getFieldValue("member AS A", array("A.id", "A.username", "A.first_name", "A.last_name", "A.email", "A.phone", "A.password", "A.photo", "A.aktif", "A.saldo"), array("A.id" => $id_member));
    
    $old_pass       = $_POST["password_lama"];
    $password       = $_POST["password_baru"];
    $konfirmasi     = $_POST["password_konf"];
        
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();

    if($data_user[0]["password"]!=$mcrypt->encrypt($old_pass)) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Password lama tidak sesuai!")));
    }

    if(strlen($password)<6) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Password baru minimal harus 6 karakter.")));
    }

    if($password!=$konfirmasi) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Konfirmasi password tidak sesuai!")));
    }

    $db->mysql_update("member", array(
        "password" => $mcrypt->encrypt($password),
    ), array(
        "id" => $id_member
    ));
    
    $data_user[0]["success"] = true;
    $data_user[0]["message"] = "Ganti Password berhasil.";
    
    $db->mysql_close();
    die(json_encode($data_user[0]));