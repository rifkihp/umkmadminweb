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
        header("location: ".ADMINWEB_URL."/banner/");
        die();
    }
    
    //GETCATEGORY
    $datacategory = array();    
    $category = $db->getFieldValue("category AS A LEFT JOIN banner_to_category AS B ON B.id_kategori=A.id AND B.id_banner='$id'", array("A.id", "A.nama", "A.id_parent", "IF(B.id_kategori IS NOT NULL, 'Y', 'N') AS is_select"), array("A.id_parent" => 0));
    foreach ($category as $key => $value) {
        $datacategory[count($datacategory)] = $value;
        $sub_category = $db->getFieldValue("category AS A LEFT JOIN banner_to_category AS B ON B.id_kategori=A.id AND B.id_banner='$id'", array("A.id", "CONCAT('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', A.nama) AS nama", "A. id_parent", "IF(B.id_kategori IS NOT NULL, 'Y', 'N') AS is_select"), array("A.id_parent" => $value['id']));
        foreach ($sub_category as $key_ => $value_) {
            $datacategory[count($datacategory)] = $value_;
        }
    }
    $smarty->assign("datacategory", $datacategory);
    
    $data = $db->getFieldValue("banner", array("id", "nama", "judul", "detail", "sub_detail_1", "sub_detail_2", "filename", "gambar"), array("id" => $id));
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $data);
    
    $smarty->assign("page_selected", "widget");
    $smarty->assign("sub_page_selected", "banner");    
    $smarty->assign("title", "Banner");
    $smarty->assign("sub_title", "Edit Banner");
    
    $id_menu = 9; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/banner/edit.html");    