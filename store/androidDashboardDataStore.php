<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
            
    $user       = $db->getFieldValue(
        "member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1", 
        array (
            "B.id_kota"
        ),
        array(
            "A.id" => $_POST["keyUserId"]
        )
    );

    $umum       = $db->getFieldValue("umum", array("tampilkan_shortcut", "tampilkan_kategori AS tampilkan_mitra", "tampilkan_induk_kategori AS tampilkan_produk_induk", "tampilkan_grup_kategori AS tampilkan_produk_home"));
    $banner     = $db->getFieldValue("banner", array("id", "nama", "id_kategori AS url_link", "filename AS url_image"), array("is_aktif" => "Y"));
    $shortcut   = $umum[0]["tampilkan_shortcut"]==0?array():$db->getFieldValue("shortcut", array("id", "nama", "direction", "icon"));
    $mitra      = $umum[0]["tampilkan_mitra"]==0?array():$db->getFieldValue(
        "member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1", array(
            "A.id",
            "CONCAT(A.first_name, ' ', A.last_name) AS nama", 
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
            "B.no_hp", 
            "A.photo AS logo"
        ), array("A.aktif" => "1", "A.admin" => "1", "A.tipe" => 1, "B.id_kota" => $user[0]["id_kota"]), array(), 16, 0, " A.id ");
    $produkinduk = $umum[0]["tampilkan_produk_induk"]==0?array():$db->getFieldValue("tab_kategori AS A", array("A.id", "A.nama"), array("is_aktif" => 1), array(), 0, 0, " A.id ");
    $produkhome  = $umum[0]["tampilkan_produk_home"]==0?array():$db->getFieldValue("tab_kategori AS A", array("A.id", "A.nama"), array("is_aktif" => 1), array(), 0, 0, " A.id ");
        
    $db->mysql_close();
    
    die(json_encode(array( 
        "banner"          => $banner, 
        "shortcut"        => $shortcut, 
        "mitra"           => $mitra, 
        "produkinduk"     => $produkinduk, 
        "produkhome"      => $produkhome,

        "tampilkan_shortcut" => $umum[0]["tampilkan_shortcut"]==1,
        "tampilkan_mitra"    => $umum[0]["tampilkan_mitra"]==1,
        
        "tampilkan_produk_induk" => $umum[0]["tampilkan_produk_induk"]==1,
        "tampilkan_produk_home"  => $umum[0]["tampilkan_produk_home"]==1
    )));