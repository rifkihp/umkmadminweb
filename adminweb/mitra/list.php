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
    
    $pagelimit = 5;
    $limit = 20;

    $tipe        = (isset($_GET["tipe"])?$_GET["tipe"]:"");
    $query       = (isset($_GET["query"])?$_GET["query"]:"");
    $currentpage = (!isset($_GET["page"])?1:$_GET["page"]);
    
    $totalrecord = $db->getFieldValue("member AS A LEFT JOIN customer_address AS B ON B.id_member=A.id AND B.as_default=1", array("COUNT(*) AS TOTAL"), array("A.tipe" => 1),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.first_name LIKE '%$query%' OR A.last_name LIKE '%$query%' OR A.email LIKE '%$query%' OR B.alamat LIKE '%$query%' OR A.phone LIKE '%$query%')":""));
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue("member AS A LEFT JOIN customer_address AS B ON B.id_member=A.id AND B.as_default=1", array("A.id", "A.username", "TRIM(CONCAT(A.first_name, ' ', A.last_name)) AS nama", "A.email", "A.phone", "B.alamat", "B.no_hp", "IF(A.aktif=1 AND A.admin=1, 1, 0) AS aktif"), array("A.tipe" => 1), array(), $limit, $limit*($currentpage-1), " id DESC ",  " 1 " . (strlen($query)>0?" AND (A.first_name LIKE '%$query%' OR A.last_name LIKE '%$query%' OR A.email LIKE '%$query%' OR B.alamat LIKE '%$query%' OR A.phone LIKE '%$query%')":"")); 

    $smarty->assign('query', $query);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("limitpage", $limit);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("page_selected", "pelanggan_mitra");
    $smarty->assign("sub_page_selected", "mitra");    
    $smarty->assign("title", "Mitra");
    $smarty->assign("sub_title", "List of Mitra");

    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }

    $id_menu = 43;
    include $root."includes/php/notification.php";

    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/mitra/list.html");