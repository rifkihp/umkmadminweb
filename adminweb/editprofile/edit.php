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
    $smarty->assign("page_selected", "editprofile");
    $smarty->assign("sub_page_selected", "editprofile");    
    $smarty->assign("title", "Edit Profile");
    $smarty->assign("sub_title", "Edit Profile");
    
    
    $data = $db->getFieldValue("admin_users AS A", array("A.id", "A.userid", "A.nama", "A.email", "A.photo", "A.phone"), array("A.id" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]));
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $data);
    
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/editprofile/edit.html");