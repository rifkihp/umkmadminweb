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
    
    $smarty->assign("page_selected", "pelanggan_mitra");
    $smarty->assign("sub_page_selected", "mitra");    
    $smarty->assign("title", "Mitra");
    $smarty->assign("sub_title", "Add New Mitra");
    $smarty->assign("is_android", true);
    $smarty->assign("id_member", $db->checkIntegerRange($_GET["id"])?$_GET["id"]:0);

    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/mitra/androidadd.html");    