<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_id_user  = $_POST["id_user"];
    $_id_mitra = $_POST["id_mitra"];
    $_page     = $_POST["page"];

    //GET DATA USER
    $data_user = $db->getFieldValue("member AS A", array("A.*"), array("id" => $_id_user));
    if(count($data_user)==0) {
        $db->mysql_close();   
        die(json_encode(array("totalCount" => 0, "produk" => array(), "nextpage" => $_page)));
    }
    $_tipe  = $data_user[0]["tipe"];
    $_limit = 100;
    
    //GET TOTAL PRODUK
    $totalCount = $db->getFieldValue(
        "produk AS A",
        array(
            "COUNT(*) AS TOTAL"
        ),
        $_tipe==0?array("A.status" => 1, "A.id_member" => $_tipe==1?$_id_user:$_id_mitra):array("A.id_member" => $_tipe==1?$_id_user:$_id_mitra), 
        array(),
        0, 0, "", 
        "1" . (strlen($_query)>0?" AND (A.kode LIKE '%".$_query."%' OR A.nama LIKE '%".$_query."%' OR A.keyword LIKE '%".$_query."%')":"")
    );
    $nbrows = $totalCount[0]["TOTAL"];
    
    $data = array();
    if($nbrows>0) {
        
        $data = $db->getFieldValue(
                "produk AS A LEFT JOIN 
                member AS B ON A.id_member=B.id LEFT JOIN 
                customer_address AS C ON B.id=C.id_member AND C.as_default=1",
            array(
                "A.*", 
                "IF(A.harga_diskon>0 AND IF(A.from_date_harga_diskon IS NOT NULL, A.from_date_harga_diskon<=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1) AND IF(A.to_date_harga_diskon IS NOT NULL, A.to_date_harga_diskon>=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1), 1, 0) AS harga_promo", 
                "IF(A.persen_diskon>0 AND IF(A.from_date_persen_diskon IS NOT NULL, A.from_date_persen_diskon<=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1) AND IF(A.to_date_persen_diskon IS NOT NULL, A.to_date_persen_diskon>=DATE_FORMAT(NOW(), '%Y-%m-%d'), 1), 1, 0) AS diskon_promo",
                "B.id AS mitra_id",
                "CONCAT(B.first_name, ' ', B.last_name) AS mitra_nama", 
                "C.alamat",
                "C.latitude",
                "C.longitude",
                "C.id_propinsi AS province_id",
                "C.nama_propinsi AS province",
                "C.id_kota AS city_id",
                "C.nama_kota AS city_name",
                "C.id_kecamatan AS subdistrict_id",
                "C.nama_kecamatan AS subdistrict_name",
                "C.kode_pos",
                "C.no_hp", 
                "B.photo AS logo",
                "CONCAT(
                    IF(A.from_date_harga_diskon IS NOT NULL, DATE_FORMAT(A.from_date_harga_diskon, '%d-%m-%Y'), ''),
                    IF(A.to_date_harga_diskon IS NOT NULL, CONCAT(' sd ', DATE_FORMAT(A.to_date_harga_diskon, '%d-%m-%Y')), '')
                ) AS periode_harga_diskon",
                "CONCAT(
                    IF(A.from_date_persen_diskon IS NOT NULL, DATE_FORMAT(A.from_date_persen_diskon, '%d-%m-%Y'), ''),
                    IF(A.to_date_persen_diskon IS NOT NULL, CONCAT(' sd ', DATE_FORMAT(A.to_date_persen_diskon, '%d-%m-%Y')), '')
                ) AS periode_persen_diskon"
            ), 
            $_tipe==0?array("A.status" => 1, "A.id_member" => $_tipe==1?$_id_user:$_id_mitra):array("A.id_member" => $_tipe==1?$_id_user:$_id_mitra), 
            array(),
            $_limit, 
            $_limit*($_page-1), 
            " A.id_member ASC, A.tanggal_update DESC ", 
            "1" . (strlen($_query)>0?" AND (A.kode LIKE '%".$_query."%' OR A.nama LIKE '%".$_query."%' OR A.keyword LIKE '%".$_query."%')":"")
        ); 
        
        foreach($data as $key => $value) {
            $data[$key]["mitra"] = array(
                "id"               => $value["mitra_id"],
                "nama"             => $value["mitra_nama"],
                "alamat"           => $value["alamat"],
                "latitude"         => $value["latitude"],
                "longitude"        => $value["longitude"],
                "province_id"      => $value["province_id"],
                "province"         => $value["province"],
                "city_id"          => $value["city_id"],
                "city_name"        => $value["city_name"],
                "subdistrict_id"   => $value["subdistrict_id"],
                "subdistrict_name" => $value["subdistrict_name"],
                "kode_pos"         => $value["kode_pos"],
                "no_hp"            => $value["no_hp"],
                "logo"             => $value["logo"]
            );
            $data[$key]["nama"]          = trim(ucwords(strtolower($value["nama"])));
            $data[$key]["publish"]       = $value["status"]==1;
            $data[$key]["foto1_produk"]  = $value["gambar_utama"];

            $data[$key]["harga_diskon"]  = $value["harga_promo"]==1?$value["harga_diskon"]:0;
            $data[$key]["persen_diskon"] = $value["diskon_promo"]==1?$value["persen_diskon"]:0;
            
            $data[$key]["periode_promo"] = "";
            if($data[$key]["persen_diskon"]>0 && strlen(trim($value["periode_persen_diskon"]))>0) {
                $data[$key]["periode_promo"] = $value["periode_persen_diskon"];
            } else if($data[$key]["harga_diskon"]>0 && strlen(trim($value["periode_harga_diskon"]))>0) {
                $data[$key]["periode_promo"] = $value["periode_harga_diskon"];
            } 
            
            $data[$key]["subtotal"]      = $data[$key]["harga_diskon"]>0?$data[$key]["harga_diskon"]:$data[$key]["harga_jual"];
            
            if($data[$key]["persen_diskon"]>0) {                    
                $data[$key]["subtotal"] = $data[$key]["subtotal"]-($data[$key]["persen_diskon"]*($data[$key]["subtotal"]*0.01));
            }
        }
    }
    $db->mysql_close();
    echo(json_encode(array(
        "produk" => $data,
        "nextpage" => $_page+(count($data)==0?0:1)
    )));