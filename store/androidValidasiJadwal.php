<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    
    $id_mitra   = $_POST["id_mitra"];
        
    $temp_tanggal_terapi = explode("-", $_POST["tanggal"]);
    $tanggal_terapi = $temp_tanggal_terapi[2]."-".$temp_tanggal_terapi[1]."-".$temp_tanggal_terapi[0];

    //CEK DATA
    $data = $db->getFieldValue(
        "customer_order_jadwal_terapi AS A LEFT JOIN customer_order_header AS B ON A.id_header=B.id", 
        array("COUNT(*) AS TOTAL"),
        array(
            "B.id_mitra"       => $id_mitra,
            "A.tanggal_terapi" => $tanggal_terapi,
            "A.jam_terapi"     => $_POST["jam"]
        ),
        array(),
        0, 0, "", "B.status IN (0, 1)"
    );

    if($data[0]["TOTAL"]==0) {
        $result = array("success" => true, "message" => "Jadwal tervalidasi.");
    } else {
        $result = array("success" => false, "message" => "Terapis sudah dipesan pada jadwal tersebut.");    
    }

    $db->mysql_close();
    die(json_encode($result));