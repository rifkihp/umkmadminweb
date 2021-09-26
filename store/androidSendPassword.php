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
    $_email = $_POST["email"];
    if(strlen($_email)==0) {
        $_error_message.= "Email harus diisi.\n";
    } else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $_error_message.= "Penulisan email tidak valid.\n";
    } else {
        $_result = $db->getFieldValue("member", array("*"), array("email" => $_email));
        if(count($_result)==0) {
            $_error_message.= "Email tidak terdaftar.\n";
        }
    }
    $db->mysql_close();
    
    if(strlen($_error_message)>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => $_error_message)));
    }
    
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();
    $_password = $mcrypt->decrypt($_result[0]["password"]);
    

    $subject = "- Lupa Password";
    $detail_message = "
        Terimakasih telah melakukan permintaan lupa password. Berikut ini adalah informasi akun Anda untuk masuk ke aplikasi Gomocart. <br /><br />
        <table>
            <tr><td>Nama: </td><td><b>".$_result[0]["first_name"]." ".$_result[0]["last_name"]."</b></td></tr>
            <tr><td>Email: </td><td><b>".$_result[0]["email"]."</b></td></tr>
            <tr><td>Password: </td><td><b>".$_password."</b></td></tr>
        </table>
        ";
        
    $email_from = "noreply@gomocart.com";
    $from_alias = "Gomocart";
    $email_to = $_result[0]["email"];
    $to_alias = trim($_result[0]["first_name"]." ".$_result[0]["last_name"]);
    $db->sendEmail($email_to, $to_alias, $subject, $detail_message, $email_from, $from_alias, $root);
    //$db->sendEmailToServer($email_to, $to_alias, $subject, $detail_message, $email_from, $from_alias);

    die(json_encode(array("success" => true, "message" => "Pengiriman password berhasil. Silhakan Cek Email.")));