<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    //USER
    $data_user  = $db->getFieldValue("member", array("*"), array("id" => $_POST["id_user"]));
    $_tipe      = $data_user[0]["tipe"];

    if($_tipe!=2) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Edit data tidak diizinkan.")));
    }


    $data = $db->getFieldValue(
        "member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1", 
        array(
            "A.id",
            "CONCAT(A.first_name, ' ', A.last_name) AS nama", 
            "A.phone AS no_hp", 
            "A.email",
            "A.username",
            "A.password",
            "B.alamat",
            "B.latitude",
            "B.longitude",
            "B.id_propinsi AS province_id",
            "B.nama_propinsi AS province",
            "B.id_kota AS city_id",
            "B.nama_kota AS city_name",
            "B.id_kecamatan AS subdistrict_id",
            "B.nama_kecamatan AS subdistrict_name",
            "B.kode_pos",
            "A.photo",
            "A.aktif",
            "A.admin"          
        ), 
        array(
            "A.id" => $_POST["id_mitra"]
        )
    ); 
    
    include $root."includes/php/MCrypt.php";
    $mcrypt = new MCrypt();

    foreach($data as $key => $value) {
        $data[$key]["aktif"]    = $value["aktif"]==1 && $value["admin"]==1;
        $data[$key]["password"] = $mcrypt->decrypt($value["password"]);
    }

    if(count($data)==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Tidak ada data.")));
    }

    $db->mysql_close();
    echo(json_encode(array(
        "success" => true,
        "message" => "Load data berhasil",
        "result"  => $data[0]
    )));