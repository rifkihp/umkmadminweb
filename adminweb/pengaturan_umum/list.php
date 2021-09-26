<?php
    $root = "../../";
    include $root."includes/php/initial.php";    
    if(!isset($_SESSION[ADMIN_SESSION_NAME])) {
        header("location: ".ADMINWEB_URL);
        die();
    }
    include $root."includes/php/classUtama.php";
    include $root."includes/php/rajaOngkir.php";
    
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
    
    
    $data = $db->getFieldValue("umum AS A LEFT JOIN pengaturan AS B ON 1", 
        array(
            "A.aktivasi_sms", 
            "A.aktivasi_admin",
            
            "B.jatuh_tempo", 
            "B.is_tampilkan_stok", 
            "B.stok_minimum", 
            "B.status_stok", 
            "B.parameter_status",
            "A.jam", 
            "A.menit"
        )
    );
    
    $tab = isset($_GET["tab"])?$_GET["tab"]:"pelanggan";
    $smarty->assign('tab', $tab);
    $smarty->assign("data", $data);
    $smarty->assign("page_selected", "pengaturan");
    $smarty->assign("sub_page_selected", "pengaturan_umum");    
    $smarty->assign("title", "Pengaturan");
    $smarty->assign("sub_title", "Pengaturan Umum");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }
    
    $id_menu = 38; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pengaturan_umum/list.html");    