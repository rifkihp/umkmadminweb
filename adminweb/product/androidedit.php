<?php
    $root = "../../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
    include SMARTY_DIR."Smarty.class.php";
    
    $smarty = new Smarty;        
    //$smarty->force_compile = true;
    //$smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 0;
    
    $smarty->assign("homeurl", HOME_URL); 
    $smarty->assign("adminweburl", ADMINWEB_URL); 
    $smarty->assign("data_user", $_SESSION[ADMIN_SESSION_NAME]["user"]);
    $smarty->assign("tpl_dir", HOME_URL."/templates/".BACK_END_TEMPLATE);
    $smarty->assign("include_tpl", BACK_END_TEMPLATE_INCLUDE_PATH);
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $id = $db->checkIntegerRange($_GET["id"])?$_GET["id"]:0;
    if($id==0) {
        header("location: ".ADMINWEB_URL."/product/");
        die();
    }
    
    //GET GAMBAR
    $listfoto = $db->getFieldValue("gambar_produk AS A", 
        array("A.nama_file", "as_default"),
        array("A.id_produk" => $id),
        array(),
        0, 
        0,
        " A.urutan "
    );
    $smarty->assign("listfoto", $listfoto);
    $data_user  = $db->getFieldValue("member", array("*"), array("id" =>$_GET["id_member"]));

    //DATA PRODUK
    $data = $db->getFieldValue("produk AS A", array("A.*",
        "DATE_FORMAT(A.from_date_harga_diskon, '%d-%m-%Y') AS from_date_harga_diskon", 
        "DATE_FORMAT(A.to_date_harga_diskon, '%d-%m-%Y') AS to_date_harga_diskon", 
        "DATE_FORMAT(A.from_date_persen_diskon, '%d-%m-%Y') AS from_date_persen_diskon", 
        "DATE_FORMAT(A.to_date_persen_diskon, '%d-%m-%Y') AS to_date_persen_diskon"), array("A.id" => $id));
        
    $data[0]["penjelasan"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["penjelasan"]);
    $data[0]["harga_jual"] = number_format($data[0]["harga_jual"], 0, '.', ',');
    $data[0]["harga_diskon"] = number_format($data[0]["harga_diskon"], 0, '.', ',');
    
    $listmitra = $db->getFieldValue(
        "member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1", 
        array(
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
            "A.photo AS logo",
            "A.aktif",
            "A.admin"    
        ), 
        array(
            "A.tipe" => 1
        )
    );
    $smarty->assign("listmitra", $listmitra);
     
    $smarty->assign("data", $data);
    $smarty->assign("isEdit", true);
    $smarty->assign("page_selected", "katalog");
    $smarty->assign("sub_page_selected", "produk");
    $smarty->assign("title", "Produk");
    $smarty->assign("sub_title", "Edit Produk");
    $smarty->assign("tipe_user", $data_user[0]["tipe"]);
    $smarty->assign("is_android", true);
    $smarty->assign("id_member", $db->checkIntegerRange($_GET["id_member"])?$_GET["id_member"]:0);
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/product/androidadd.html");    