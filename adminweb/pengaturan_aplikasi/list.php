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
    
    
    $data = $db->getFieldValue("umum AS A", 
        array(
            "A.avatar", 
            "A.logo", 
            "A.bg",
            
            "A.landing_page", 
            "A.tampilkan_shortcut", 
            "A.tampilkan_kategori", 
            "A.tampilkan_induk_kategori",
            "A.tampilkan_shortcut_bawah",
            
            "A.app_ver_no",
            "A.app_ver_name",
            "A.app_desc"
        )
    );
    
    $pagelimit = 5;
    $limit = 20;
    
    $tipe        = (isset($_GET["tipe"])?$_GET["tipe"]:"");
    $query       = (isset($_GET["query"])?$_GET["query"]:"");
    $currentpage = (!isset($_GET["page"])?1:$_GET["page"]);
    
    $totalrecord = $db->getFieldValue("shortcut AS A LEFT JOIN link AS B ON A.direction=B.id", array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.nama LIKE '%$query%' OR B.nama LIKE '%$query%')":""));
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue("shortcut AS A LEFT JOIN link AS B ON A.direction=B.id", array("A.id", "A.nama", "B.nama AS direction", "A.icon"), array(), array(), $limit, $limit*($currentpage-1), " id DESC ",  " 1 " . (strlen($query)>0?" AND (A.nama LIKE '%$query%' OR B.nama LIKE '%$query%')":"")); 
    
    $tab = isset($_GET["tab"])?$_GET["tab"]:"general1";
    $smarty->assign('tab', $tab);
    $smarty->assign('query', $query);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("limitpage", $limit);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("data", $data);
    $smarty->assign("page_selected", "pengaturan");
    $smarty->assign("sub_page_selected", "pengaturan_aplikasi");    
    $smarty->assign("title", "Pengaturan");
    $smarty->assign("sub_title", "Pengaturan Aplikasi");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }
    
    $id_menu = 36; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pengaturan_aplikasi/list.html");    