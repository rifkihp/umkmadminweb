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
    
    //GET PROPINSI
    $ro = new rajaOngkir(RAJA_ONGKIR_TYP, RAJA_ONGKIR_KEY);
    $smarty->assign("listpropinsi", $ro->getPropinsi());
    
    $datakurir = $db->getFieldValue("ekspedisi AS A LEFT JOIN freeongkir_kurir AS B ON A.id=B.id_kurir", array("A.id", "A.kode", "IF(B.id_kurir IS NULL, 'N', 'Y') AS is_select"));
    $smarty->assign("datakurir", $datakurir);
    
    $pagelimit = 5;
    $limit = 20;
    
    $tipe        = (isset($_GET["tipe"])?$_GET["tipe"]:"");
    $query       = (isset($_GET["query"])?$_GET["query"]:"");
    $currentpage = (!isset($_GET["page"])?1:$_GET["page"]);
    
    $totalrecord = $db->getFieldValue("ekspedisi AS A", array("COUNT(*) AS TOTAL"), array(),  array(), 0, 0, "", " 1 " . (strlen($query)>0?" AND (A.nama_ekspedisi LIKE '%$query%' OR A.nama_pemilik_rekening LIKE '%$query%' OR A.no_rekening LIKE '%$query%')":""));
    $totalpage = ceil($totalrecord[0]["TOTAL"]/$limit);
    $frompage = $totalpage<=$pagelimit?1:($currentpage>($totalpage+1-$pagelimit)?($totalpage+1-$pagelimit):$currentpage);
    $untilpage = $totalpage<$pagelimit?$totalpage:$frompage+$pagelimit-1;
    $listdetail = $db->getFieldValue("ekspedisi AS A", array("A.id", "A.kode", "A.nama", "A.is_aktif", "A.gambar"), array(), array(), $limit, $limit*($currentpage-1), " id DESC ",  " 1 " . (strlen($query)>0?" AND (A.nama_ekspedisi LIKE '%$query%' OR A.nama_pemilik_rekening LIKE '%$query%' OR A.no_rekening LIKE '%$query%')":"")); 
    
    $freeongkir = $db->getFieldValue("freeongkir_setting AS A", array("A.is_aktif", "A.all_produk", "A.min_pembelian"));
    $data[0]["is_aktif_freeongkir"] = $freeongkir[0]["is_aktif"];
    $data[0]["all_produk_freeongkir"] = $freeongkir[0]["all_produk"];
    $data[0]["min_pembelian_freeongkir"] = number_format($freeongkir[0]["min_pembelian"], 0, '.', ',');
    
    
    $freeongkir_tujuan = $db->getFieldValue("freeongkir_tujuan AS A", array("A.id", "A.id_propinsi", "A.propinsi", "A.id_kota", "A.kota"));
    foreach ($freeongkir_tujuan as $key => $value) {
        $freeongkir_tujuan[$key]["list_kota"] = "";
    }
    
    
    
    $tab = isset($_GET["tab"])?$_GET["tab"]:"dataekspedisi";
    $smarty->assign('tab', $tab);
    $smarty->assign('query', $query);
    $smarty->assign("currentpage", $currentpage);
    $smarty->assign("limitpage", $limit);
    $smarty->assign("totalpage", $totalpage);
    $smarty->assign("untilpage", $untilpage);
    $smarty->assign("frompage", $frompage);
    $smarty->assign("listdetail", $listdetail);
    $smarty->assign("data", $data);
    $smarty->assign("freeongkir_tujuan", $freeongkir_tujuan);
    $smarty->assign("page_selected", "pengaturan");
    $smarty->assign("sub_page_selected", "metode_pengiriman");    
    $smarty->assign("title", "Pengaturan");
    $smarty->assign("sub_title", "Metode Pengiriman");
    
    if(isset($_SESSION["alert_success"])) {
        $smarty->assign("alert_success", $_SESSION["alert_success"]);
        unset($_SESSION["alert_success"]);
    }
    
    $id_menu = 24; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/metode_pengiriman/list.html");    