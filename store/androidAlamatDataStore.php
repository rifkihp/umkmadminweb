<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $user_id = $_POST["user_id"];
    $sort_by = $_POST["sort_by"];
    
    $alamat = $db->getFieldValue("customer_address", array(
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
    ), array(
        "id_member" => $user_id
    ), array(), 0, 0, ($sort_by==2?"nama DESC":"nama ASC"));
    
    foreach($alamat as $i => $value) {
        $alamat[$i]["as_default"] = $value["as_default"]==1;
    }

    $db->mysql_close();
    die(json_encode(array("alamat" => $alamat)));