<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    //DATA ALAMAT
    $data_alamat = $db->getFieldValue(
        "customer_address", 
        array(
            "id",
            "nama",
            "alamat",
            "latitude",
            "longitude",
            "id_propinsi AS province_id",
            "nama_propinsi AS province",
            "id_kota AS city_id",
            "nama_kota AS city_name",
            "id_kecamatan AS subdistrict_id",
            "nama_kecamatan AS subdistrict_name",
            "kode_pos",
            "no_hp",
            "as_default"
        ), 
        array(
            "id_member" => $_POST["user_id"], 
            "as_default" => 1
        )
    );
    
    foreach($data_alamat as $i => $value) {
        $data_alamat[$i]["as_default"] = $value["as_default"]==1;
    }

    $db->mysql_close();
    
    die(json_encode(array("alamat"=> $data_alamat[0])));