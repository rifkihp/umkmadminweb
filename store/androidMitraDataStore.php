<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    //$_POST["id_user"] = 1;
    //$_POST["page"] = 1;
    //$_POST["produk_saya"] = 1;

    //USER
    $data_user  = $db->getFieldValue("member", array("*"), array("id" => $_POST["id_user"]));
    $_tipe      = $data_user[0]["tipe"];

    $_limit     = 100;
    $_page      = $_POST["page"];
    $_query     = $_POST["query"];
    
    //get total
    $sql = "SELECT 
            COUNT(*) AS TOTAL 
        FROM 
            member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1
        WHERE 1 " . ($_tipe==1?"AND A.id=".$_POST["id_user"]:"") .
            (strlen($_query)>0?" AND (CONCAT(A.first_name, ' ', A.last_name) LIKE '%".$_query."%')":"");
    $db->mysql_query($sql, $rec_count, $rs);
    $nbrows = $rs[0]["TOTAL"];

    $data = array();
    if($nbrows>0) {
        
        $data = $db->getFieldValue(
            "member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1", array(
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
        array("A.tipe" => 1), array(), $_limit, $_limit*($_page-1), " A.id ", "1 " .  ($_tipe==1?"AND A.id=".$_POST["id_user"]:"") . (strlen($_query)>0?" AND (CONCAT(A.first_name, ' ', A.last_name) LIKE '%".$_query."%')":"")); 
        
        foreach($data as $key => $value) {
            $data[$key]["aktif"] = $value["aktif"]==1 && $value["admin"]==1;
        }
    }
    $db->mysql_close();
    echo(json_encode(array(
        "totalCount" => count($data),
        "topics"     => $data,
        "next_page"  => $_page+(count($data)==0?0:1)
    )));