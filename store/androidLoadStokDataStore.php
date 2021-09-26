<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $id = $db->checkIntegerRange($_POST["id"])?$_POST["id"]:0;
    
    $data_user = $db->getFieldValue("member", array("*"), array("id" => $_POST["id_user"]));
    $tipe_user = count($data_user)>0?$data_user[0]["jenis_user"]:0;
    $freeongkir = $db->getFieldValue("freeongkir_setting", array("is_aktif", "all_produk"));
        
    
    
    
    //GET LIST UKURAN DAN WARNA
    $list_ukuran = $list_warna = array();
    $data_ukuran_warna = $db->getFieldValue("produk_varian", array("*"), array("id_produk" => $id), array(), 0, 0, "", "jumlah>0");
    $jumlah_stok = 0;
    if(count($data_ukuran_warna)==1 && $data_ukuran_warna[0]["ukuran"]=="" && $data_ukuran_warna[0]["warna"]=="") {
        $jumlah_stok = $data_ukuran_warna[0]["jumlah"];
    } else {
        //GET LIST UKURAN
        foreach($data_ukuran_warna as $i => $value) {        
            $jumlah_stok+=$value["jumlah"];
            if(strlen($value["ukuran"])>0) {
                $add_ukuran = true;
                foreach ($list_ukuran as $i_ukuran => $v_ukuran) {
                    if($v_ukuran["ukuran"]==$value["ukuran"]) {
                        $add_ukuran = false;
                        break;
                    }
                }            
                if($add_ukuran) { $list_ukuran[count($list_ukuran)]["ukuran"] = $value["ukuran"]; }
            }

            if(strlen($value["warna"])>0) {
                $add_warna = true;
                foreach ($list_warna as $i_warna => $v_warna) {
                    if($v_warna["warna"]==$value["warna"]) {
                        $add_warna = false;
                        break;
                    }
                }
                if($add_warna) { $list_warna[count($list_warna)]["warna"] = $value["warna"]; }
            }
        }
    }
      
    $db->mysql_close();
    die(json_encode(array("jumlah_stok" => $jumlah_stok, "list_ukuran" => $list_ukuran, "list_warna" => $list_warna, "list_stok" => $data_ukuran_warna)));