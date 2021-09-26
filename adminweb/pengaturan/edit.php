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
    
    //TELEPON
    $listtelepon = $db->getFieldValue("umum_contact AS A", 
        array("A.contact AS telepon"),
        array("A.tipe" => "telepon")
    );
    if(count($listtelepon)==0) {
        $listtelepon = array(
            array("telepon" => "")     
        );
    }
    $smarty->assign("listtelepon", $listtelepon);
    
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
    
    $data = $db->getFieldValue("umum AS A LEFT JOIN pengaturan AS B ON 1", array("A.jam", "A.menit", "A.id", "A.judul", "A.tagline", "A.email", "A.telepon", "A.no_hp", "A.address AS alamat", "A.syaratketentuan AS syarat_kondisi", "A.propinsi", "A.kota", "A.kode_pos", "A.latitude", "A.longitude", "A.tentangkami AS detail", "A.avatar", "A.logo", "A.bg", "A.landing_page", "A.tampilkan_shortcut", "A.tampilkan_kategori", "A.tampilkan_induk_kategori", "A.aktivasi_sms", "A.aktivasi_admin", "B.jatuh_tempo", "B.is_tampilkan_stok", "B.stok_minimum", "B.status_stok", "B.parameter_status"));
    $freeongkir = $db->getFieldValue("freeongkir_setting AS A", array("A.is_aktif", "A.all_produk", "A.min_pembelian"));
    $data[0]["is_aktif_freeongkir"] = $freeongkir[0]["is_aktif"];
    $data[0]["all_produk_freeongkir"] = $freeongkir[0]["all_produk"];
    $data[0]["min_pembelian_freeongkir"] = number_format($freeongkir[0]["min_pembelian"], 0, '.', ',');
    $data[0]["detail"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["detail"]);
    $data[0]["syarat_kondisi"] = preg_replace("/\r\n|\r|\n/",'<br/>',$data[0]["syarat_kondisi"]);
    
    $datakurir = $db->getFieldValue("ekspedisi AS A LEFT JOIN freeongkir_kurir AS B ON A.id=B.id_kurir", array("A.id", "A.kode", "IF(B.id_kurir IS NULL, 'N', 'Y') AS is_select"));
    
    //GET PROPINSI
    $ro = new rajaOngkir(RAJA_ONGKIR_TYP, RAJA_ONGKIR_KEY);
    $smarty->assign("listpropinsi", $ro->getPropinsi());
    
    $smarty->assign("isEdit", true);
    $smarty->assign("data", $data);
    $smarty->assign("datakurir", $datakurir);
    $smarty->assign("page_selected", "pengaturan");
    $smarty->assign("sub_page_selected", "umum");    
    $smarty->assign("title", "Umum");
    $smarty->assign("sub_title", "Edit Umum");
    
    $id_menu = 22; $aksi = "E";
    include $root."includes/php/notification.php";
    
    $db->mysql_close();
    $smarty->display(BACK_END_TEMPLATE_PATH."/pengaturan/edit.html");    