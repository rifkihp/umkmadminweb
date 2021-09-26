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
        header("location: ".ADMINWEB_URL."/category/");
        die();
    }
    
    $data = $db->getFieldValue("category", array("*"), array("id" => $id));
        
    //CHECK LEVEL
    $level = 0;
    $haveaparent = $data[0]["id_parent"]>0;
    $id_kategori = $data[0]["id_parent"];
    while ($haveaparent) {
        $data_kategori = $db->getFieldValue("category AS A", array("id_parent"), array("id" => $id_kategori));
        $haveaparent = $data_kategori[0]["id_parent"]>0;
        $id_kategori = $data_kategori[0]["id_parent"];
        
        $level++;
    }
    //die('level '.$level);
    
    $datacategory = $db->getFieldValue("category AS A", array("id", "nama"), array("id_parent" => 0));
    $smarty->assign("datacategory", $datacategory);
    
    
    if($level==1) {
        $datacategory_level_1 = $db->getFieldValue("category AS A", array("id", "nama"), array("id_parent" => $data[0]["id_parent"]), array(), 0, 0, "", "id<>$id");
        $smarty->assign("datacategory_level_1", $datacategory_level_1); 
    }
    
    if($level==2) {
        $data[0]["level_1"] = $data[0]["id_parent"];

        $get_parent_level_1 = $db->getFieldValue("category AS A", array("id_parent"), array("id" => $data[0]["level_1"]));
        $data[0]["id_parent"] = $get_parent_level_1[0]["id_parent"];
        
        $datacategory_level_1 = $db->getFieldValue("category AS A", array("id", "nama"), array("id_parent" => $data[0]["id_parent"]));
        $smarty->assign("datacategory_level_1", $datacategory_level_1);        
    }
    
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $data);
    
    $smarty->assign("page_selected", "katalog");
    $smarty->assign("sub_page_selected", "category");    
    $smarty->assign("title", "Category");
    $smarty->assign("sub_title", "Edit Category");
    
    $id_menu = 13; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/category/edit.html");    