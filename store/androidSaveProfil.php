<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $id_member = $_POST["id_user"];
    if(strlen($_POST["first_name"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama harus diisi!")));
    }
    
    if(strlen($_POST["no_hp"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "No Handphone harus diisi.")));
    } else {
        $phone_count = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("phone" => $_POST["no_hp"]), array(), 0, 0, "", "id<>'".$id_member."'");
        if($phone_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "No. Handphone sudah terpakai.")));
        }
    }
    
    if(strlen($_POST["email"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Email harus diisi!")));
    } else 
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Email tidak valid!")));
    } else {
        $email_count = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("email" => $_POST["email"]), array(), 0, 0, "", "id<>'".$id_member."'");
        if($email_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Alamat email sudah terpakai.")));
        }
    }

    if(strlen($_POST["username"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Username harus diisi!")));
    } else {
        $username_count = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("username" => $_POST["username"]), array(), 0, 0, "", "id<>'".$id_member."'");
        if($username_count[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Username sudah terpakai.")));
        }
    }
    
    $db->mysql_update("member", array(
        "first_name" => $_POST["first_name"],
        "last_name"  => $_POST["last_name"],
        "username"   => $_POST["username"],
        "email"      => $_POST["email"],
        "phone"      => $_POST["no_hp"]
    ), array(
        "id" => $id_member
    ));
    
    $data_user = $db->getFieldValue(
        "member AS A LEFT JOIN jenis_user AS B ON B.id=A.jenis_user", 
        array(
            "A.id", 
            "A.first_name", 
            "A.last_name",
            "A.phone", 
            "A.email",
            "A.username", 
            "A.dropship_name", 
            "A.dropship_phone", 
            "B.nama AS jenis_user",
            "A.photo", 
            "A.saldo", 
            "A.tipe"
        ), 
        array(
            "A.id" => $id_member
        )
    );

    $result = array(
        "success" => true,
        "message" => "Edit Profil berhasil.",
        "user"    => $data_user[0]
    );

    $db->mysql_close();
    die(json_encode($result));