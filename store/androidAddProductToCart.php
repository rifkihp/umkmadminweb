<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
        
    $message = "";
    $cart = array();
    $kode_trx = strlen($_POST["kode_trx"])==0?$db->create_kode_unik():$_POST["kode_trx"];
    
    $row = explode("\n", trim($_POST["items"]));
    foreach($row as $i => $value) {
        $col = explode("\t", $value);    
        $id_produk = $col[0];
        $ukuran    = $col[1];
        $warna     = $col[2];
        $qty       = $col[3];
        
        //CEK PRODUK
        if($i==0) {
            $sql = "SELECT COUNT(*) AS TOTAL FROM produk WHERE id='".$id_produk."'";
            $db->mysql_query($sql, $rec_count, $data);
            if($data[0]["TOTAL"]==0) {
                $message = "Produk tidak valid!";
                break;
            }
        }
                
        //CEK STOK
        $produk_keep = $db->getFieldValue("produk_keep AS A", array("SUM(A.qty) AS total_keep"), array("A.kode_trx" => $kode_trx, "A.id_produk"=>$id_produk, "A.ukuran" => $ukuran, "A.warna" => $warna));
        $data_stok   = $db->getFieldValue("produk_varian AS A", array("SUM(A.jumlah) AS jumlah"), array("A.id_produk" => $id_produk, "A.ukuran" => $ukuran, "A.warna" => $warna));
        if($qty>($data_stok[0]["jumlah"])) {
            $message.=(strlen($message)>0?"\n":"")."Stok ".(strlen($ukuran)>0?"ukuran $ukuran ":"").(strlen($warna)>0?"warna $warna ":"")."tidak cukup!";
        } else {
            
            $cart[count($cart)] = array("id" => $id_produk, "ukuran" => $ukuran, "warna" => $warna, "qty" => $qty, "total_keep" => $produk_keep[0]["total_keep"], "timeorder" => date("Y-m-d H:i:s"));
        }        
    }
            
    if(strlen($message)>0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => $message)));    
    }
    
    //KEEP STOK
    foreach($cart as $i => $value) {    
        $db->mysql_update(
            "produk_varian", 
            array(
                "jumlah" => "(jumlah-".$value["qty"].")", 
                "keep" => "(keep+".$value["qty"].")"), 
            array(
                "id_produk" => $value["id"], 
                "ukuran" => $value["ukuran"],
                "warna" => $value["warna"]), 
            array(
                "jumlah", 
                "keep")
        );

        //SAVE COUNTDOWN TIMER
        $db->mysql_delete("produk_keep", array("kode_trx" => $kode_trx, "id_produk"=>$value["id"], "ukuran" => $value["ukuran"], "warna" => $value["warna"]));
        $db->mysql_insert("produk_keep", array("kode_trx" => $kode_trx, "id_produk"=>$value["id"], "ukuran" => $value["ukuran"], "warna" => $value["warna"], "qty" => ($value["qty"]+$value["total_keep"]), "timeorder" => $value["timeorder"]));
    }
    $db->mysql_close();
    die(json_encode(array("success" => true, "kode_trx" => $kode_trx, "items" => $cart)));