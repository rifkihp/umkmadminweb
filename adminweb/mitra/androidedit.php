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
    
    $id = $db->checkIntegerRange($_GET["id"])?$_GET["id"]:0;
    if($id==0) {
        header("location: ".ADMINWEB_URL."/mitra/");
        die();
    }
    
    $jenis_user = $db->getFieldValue("jenis_user", array("id", "nama"));
    $smarty->assign("jenis_user", $jenis_user);
    
    //GET PROPINSI
    $ro = new rajaOngkir(RAJA_ONGKIR_TYP, RAJA_ONGKIR_KEY);
    $smarty->assign("listpropinsi", $ro->getPropinsi());
    
    $detail = $db->getFieldValue("member AS A LEFT JOIN customer_address AS B ON A.id=B.id_member AND B.as_default=1", 
            array("A.id", "A.first_name", "A.last_name", "A.email", "A.username", "A.phone", "A.jenis_user", "A.photo", "IF(A.aktif=1 AND admin=1, 1, 0) AS aktif", "B.alamat", "B.no_hp", "B.id_propinsi", "B.nama_propinsi", "B.id_kota", "B.nama_kota", "B.id_kecamatan", "B.nama_kecamatan", "B.kode_pos"), 
            array("A.id" => $id));
    
    $db->mysql_update("member", array("is_open" => 1), array("id" => $id));
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $detail);
    
    $smarty->assign("page_selected", "pelanggan_mitra");
    $smarty->assign("sub_page_selected", "mitra");    
    $smarty->assign("title", "Mitra");
    $smarty->assign("sub_title", "Edit Mitra");
    $smarty->assign("is_android", true);
    $smarty->assign("id_member", $data[0]["id_member"]);
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/mitra/androidadd.html");    