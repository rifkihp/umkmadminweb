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
    
    $pagelimit = 5;
    $limit = 20;
    
    $tipe        = (isset($_GET["tipe"])?$_GET["tipe"]:"");
    $query       = (isset($_GET["query"])?$_GET["query"]:"");
    $currentpage = (!isset($_GET["page"])?1:$_GET["page"]);
    
    $totalrecord = $db->getFieldValue("bank_transfer AS A", array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.nama_bank LIKE '%$query%' OR A.nama_pemilik_rekening LIKE '%$query%' OR A.no_rekening LIKE '%$query%')":""));
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue("bank_transfer AS A", array("A.id", "A.nama_bank", "A.cabang", "A.no_rekening", "A.nama_pemilik_rekening", "A.gambar", "A.is_aktif"), array(), array(), $limit, $limit*($currentpage-1), " id DESC ",  " 1 " . (strlen($query)>0?" AND (A.nama_bank LIKE '%$query%' OR A.nama_pemilik_rekening LIKE '%$query%' OR A.no_rekening LIKE '%$query%')":"")); 
    
    $tab = isset($_GET["tab"])?$_GET["tab"]:"transferbank";
    $smarty->assign('tab', $tab);
    $smarty->assign('query', $query);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("limitpage", $limit);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "pengaturan");
    $smarty->assign("sub_page_selected", "metode_pembayaran");    
    $smarty->assign("title", "Pengaturan");
    $smarty->assign("sub_title", "Metode Pembayaran");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }
    
    $id_menu = 23; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/metode_pembayaran/list.html");    