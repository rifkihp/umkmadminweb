<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_email    = $_POST["email"];
    $_password = $_POST["password"];
    
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();
    
    if(strlen($_email)==0 || strlen($_password)==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Email dan password harus diisi!")));
    }
    
    $sql = "SELECT A.id, A.first_name, A.last_name, A.phone, A.email, A.username, A.dropship_name, A.dropship_phone, B.nama AS jenis_user, A.password, A.photo, A.saldo, A.aktif, A.admin, A.tipe FROM member AS A
            LEFT JOIN jenis_user AS B ON B.id=A.jenis_user WHERE (A.email='".$_email."' OR A.phone='".$_email."' OR A.username='".$_email."') AND A.password='".$mcrypt->encrypt($_password)."'";
    $db->mysql_query($sql, $rec_count, $data_login);
    
    if(($data_login[0]["email"]==$_email || $data_login[0]["phone"]==$_email || $data_login[0]["username"]==$_email)) {
        if($data_login[0]["aktif"]==0 || $data_login[0]["admin"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Akun belum aktif!")));
        } else {   
            unset($data_login[0]["password"]);
            unset($data_login[0]["aktif"]);
            unset($data_login[0]["admin"]);
            $result = array(
                "success" => true,
                "message" => "Login Berhasil.",
                "user"    => $data_login[0]
            );

            $db->mysql_close();
            die(json_encode($result));            
        }
    } else {
    	$db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Email dan password tidak sesuai!")));        
    }  