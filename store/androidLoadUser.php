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
    
    $sql = "SELECT A.id, A.username, A.first_name, A.last_name, A.email, A.phone, A.dropship_name, A.dropship_phone, B.nama AS jenis_user, A.photo, A.saldo FROM member AS A
            LEFT JOIN jenis_user AS B ON B.id=A.jenis_user WHERE A.id='".$_POST["user_id"]."'";
    $db->mysql_query($sql, $rec_count, $member);
    $db->mysql_close();
    
    die(json_encode($member[0]));
    