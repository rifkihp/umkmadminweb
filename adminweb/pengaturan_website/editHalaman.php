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
    $data = $db->getFieldValue("menu_page", array("id", "judul", "keyword", "konten", "posisi", "is_aktif AS status"), array("id" => $id));
    $smarty->assign("data", $data);
    
    $smarty->assign("isEdit", true);
    $smarty->assign("page_selected", "pengaturan");
    $smarty->assign("sub_page_selected", "pengaturan_website");    
    $smarty->assign("title", "Pengaturan");
    $smarty->assign("sub_title", "Edit Halaman Web");
    
    $id_menu = 37; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pengaturan_website/edit_halaman.html");