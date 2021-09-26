<?php
    $root = "../";
    include $root."includes/php/initial.php";
    if(strlen($_SESSION['security_code'])==0 || !isset($_SESSION['security_code']) || $_POST["security_code"]!=$_SESSION['security_code']) {
    	die(json_encode(array("success" => false, "message" => "Maaf! Token tidak valid!")));
    }
    unset($_SESSION['security_code']);

    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_error_message = "";
    $_nohp = $_POST["nohp"];
    
    if(strlen($_nohp)==0) {
        $_error_message = "No. HP tidak valid.\n";
        
    } else {
        
        $_result = $db->getFieldValue("member", array("COUNT(*) AS TOTAL"), array("phone" => $_nohp));
        if($_result[0]["TOTAL"]>0) {
            $_error_message = "No HP sudah terdaftar.\n";
        } 
    }
    
    if(strlen($_error_message)>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => $_error_message)));
    }
    $kode_otp = $db->create_kode_unik(4);    
    $data_umum = $db->getFieldValue("umum", array("aktivasi_sms"));
    if($data_umum[0]["aktivasi_sms"]==1) {
        $db->sendSms($_nohp, "GOMOCART: Kode OTP ".$kode_otp.".");
    }
    
    die(json_encode(array("success" => true, "nohp" => $_nohp, "aktivasi_sms" => $data_umum[0]["aktivasi_sms"], "otp" => $kode_otp)));
    $db->mysql_close();
