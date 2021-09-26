<?php
    $root = "../../";
    include $root."includes/php/initial.php";    
    if(!isset($_SESSION[ADMIN_SESSION_NAME])) {
        header("location: ".ADMINWEB_URL);
        die();
    }
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
    $db->mysql_connect();
    
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
    
    //DATA PRODUK
    $data = $db->getFieldValue("produk", array("*", 
        "DATE_FORMAT(from_date_harga_diskon, '%d-%m-%Y') AS from_date_harga_diskon", 
        "DATE_FORMAT(to_date_harga_diskon, '%d-%m-%Y') AS to_date_harga_diskon", 
        "DATE_FORMAT(from_date_persen_diskon, '%d-%m-%Y') AS from_date_persen_diskon", 
        "DATE_FORMAT(to_date_persen_diskon, '%d-%m-%Y') AS to_date_persen_diskon"), array("id" => $id));
    $data[0]["penjelasan"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["penjelasan"]);
    $data[0]["berat"] = number_format($data[0]["berat"], 0, '.', ',');
    $data[0]["harga_modal"] = number_format($data[0]["harga_modal"], 0, '.', ',');
    $data[0]["harga_jual"] = number_format($data[0]["harga_jual"], 0, '.', ',');
    $data[0]["harga_diskon"] = number_format($data[0]["harga_diskon"], 0, '.', ',');
    
    $smarty->assign("data", $data);
    
    $listmitra = $db->getFieldValue("member", array("id", "CONCAT(first_name, ' ', last_name) AS nama"), array("tipe" => 1));
    $smarty->assign("listmitra", $listmitra);
    
    $smarty->assign("isEdit", true);
    $smarty->assign("page_selected", "katalog");
    $smarty->assign("sub_page_selected", "produk");
    $smarty->assign("title", "Produk");
    $smarty->assign("sub_title", "Edit Produk");
    
    $id_menu = 14; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/product/edit.html");    