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
    
    //NO HP
    $listno_hp = $db->getFieldValue("umum_contact AS A", 
        array("A.contact AS no_hp"),
        array("A.tipe" => "no_hp")
    );
    if(count($listno_hp)==0) {
        $listno_hp = array(
            array("no_hp" => "")     
        );
    }
    $smarty->assign("listno_hp", $listno_hp);
    
    //WA
    $listwa = $db->getFieldValue("umum_contact AS A", 
        array("A.contact AS wa"),
        array("A.tipe" => "wa")
    );
    if(count($listwa)==0) {
        $listwa = array(
            array("wa" => "")     
        );
    }
    $smarty->assign("listwa", $listwa);
    
    //SMS
    $listsms = $db->getFieldValue("umum_contact AS A", 
        array("A.contact AS sms"),
        array("A.tipe" => "sms")
    );
    if(count($listsms)==0) {
        $listsms = array(
            array("sms" => "")     
        );
    }
    $smarty->assign("listsms", $listsms);
    
    //BBM
    $listbbm = $db->getFieldValue("umum_contact AS A", 
        array("A.contact AS bbm"),
        array("A.tipe" => "bbm")
    );
    if(count($listbbm)==0) {
        $listbbm = array(
            array("bbm" => "")     
        );
    }
    $smarty->assign("listbbm", $listbbm);
    
    //LINE
    $listline = $db->getFieldValue("umum_contact AS A", 
        array("A.contact AS line"),
        array("A.tipe" => "line")
    );
    if(count($listline)==0) {
        $listline = array(
            array("line" => "")     
        );
    }
    $smarty->assign("listline", $listline);
    
    $data = $db->getFieldValue("umum AS A", 
        array(
            "A.judul", 
            "A.tagline", 
            "A.address AS alamat", 
            "A.propinsi", 
            "A.kota", 
            "A.kode_pos", 
            "A.latitude", 
            "A.longitude",
            "A.logo", 
        
            "A.jam_kerja", 
            "A.email", 
        
            "A.facebook", 
            "A.instagram", 
            "A.twitter"
        )
    );
    
    $smarty->assign("data", $data);
    $smarty->assign("page_selected", "pengaturan");
    $smarty->assign("sub_page_selected", "pengaturan_toko");    
    $smarty->assign("title", "Pengaturan");
    $smarty->assign("sub_title", "Pengaturan Toko");
    
    $id_menu = 35; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pengaturan_toko/edit.html");    