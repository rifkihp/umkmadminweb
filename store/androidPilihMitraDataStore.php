<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $data = $db->getFieldValue(
        "member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1", 
        array(
            "A.id",
            "CONCAT(A.first_name, ' ', A.last_name) AS nama", 
            "B.no_hp", 
            "A.email",
            "A.username",
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
        array("A.tipe" => 1)
    ); 
    
    foreach($data as $key => $value) {
        $data[$key]["aktif"] = $value["aktif"]==1 && $value["admin"]==1;
    }
    
    $db->mysql_close();
    echo(json_encode(array(
        "totalCount" => count($data),
        "topics"     => $data
    )));