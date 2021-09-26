<?php
    $root = "../";
    include $root."includes/php/initial.php";
    if(strlen($_SESSION['security_code'])==0 || !isset($_SESSION['security_code']) || $_POST["security_code"]!=$_SESSION['security_code']) {
    	die(json_encode(array("success" => false, "message" => "Maaf! Token tidak valid!")));
    }
    unset($_SESSION['security_code']);

    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $id_member = $_POST["user_id"];    
    $id_header = $db->getLastNumber("ppob_transaksi", "id");
    $kode_order = $db->getLastNumber("ppob_transaksi", "kode", 4, $_POST["kode_trx"]."-".date("Ymd")."-");
    
    if(strlen($_POST["metode_pembayaran"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Metode pembayaran harus diisi.")));
    }
    
    //VALIDASI SALDO
    $member = $db->getFieldValue("member AS A", array("A.saldo"), array("A.id" => $id_member));
    if($member[0]["saldo"]<$_POST["total"]) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Saldo tidak mencukupi.")));
    }
    $tanggal_jam = date("Y-m-d H:i:s");
    
    //SALDO MEMBER BERKURANG
    $sql = "UPDATE member SET saldo=saldo-".$_POST["total"]." WHERE id=".$id_member;
    $db->mysql_execute($sql);

    //HISTORI TRANSAKSI
    $db->mysql_insert("h_trx", array(
        "id_member" => $id_member,
        "kode"   => $_POST["kode_trx"],
        "jenis"  => "D",
        "id_ref" => $id_header,
        "jumlah" => $_POST["total"],
        "tanggal_jam" => $tanggal_jam
    ));
    
    //SAVE TRANSAKSI
    $data = array(
        "id" => $id_header,
        "id_member" => $id_member,
        "kode" => $kode_order,
        "jenis_trx" => $_POST["tipe_trx"],
        "tanggal_jam" => $tanggal_jam,
        "pembayaran" => $_POST["metode_pembayaran"],
        
        "id_produk" => $_POST["id_produk"],
        "provider" => $_POST["provider"],
        "provider_sub" => $_POST["provider_sub"],
        "code" => $_POST["code"],
        "description" => $_POST["description"],
        "nomer_tujuan" => $_POST["nomer_tujuan"],
        "total" => $_POST["total"],
        "beli" => $_POST["beli"],
        
        "date_update_status" => $tanggal_jam,
        "date_create" => $tanggal_jam,
        "date_update" => $tanggal_jam,
        "status" => "2" 
    );
    
    if($_POST["tipe_trx"]=="BAYAR") {
        $data["nama_tujuan"] = $_POST["nama_tujuan"];
        $data["lembar"]      = $_POST["lembar"];
        $data["pemakaian"]   = $_POST["pemakaian"];
        $data["periode"]     = $_POST["periode"];
        $data["tagihan"]     = $_POST["tagihan"];
        $data["denda"]       = $_POST["denda"];
        $data["admin"]       = $_POST["admin"];
    }
    
    if($_POST["metode_pembayaran"]==1) {
        $data["bank_id"] = $_POST["bank_id"];
        $data["no_rekening"] = $_POST["bank_no_rekening"];
        $data["nama_pemilik_rekening"] = $_POST["bank_nama_pemilik_rekening"];
        $data["nama_bank"] = $_POST["bank_nama"];
        $data["cabang"] = $_POST["bank_cabang"];    
    }
    
    $db->mysql_insert("ppob_transaksi", $data);
    
    $command = $_POST["code"];
    if($_POST["kode_trx"]=="PLS") {
        if($_POST["provider"]=="TELKOMSEL") {
            $command = str_replace("SU", "", $_POST["code"]);
        } else if($_POST["provider"]=="XL") {
            $command = $_POST["code"]!="XU100"?str_replace("XU", "", $_POST["code"]):$_POST["code"];
        } else if($_POST["provider"]=="AXIS") {
            $command = $_POST["code"]!="AX100"?str_replace("AX", "", $_POST["code"]):$_POST["code"];
        } else if($_POST["provider"]=="SMARTFREN") {
            $command = str_replace("SM", "", $_POST["code"]);
        } else if($_POST["provider"]=="INDOSAT") {
            $command = str_replace("IM", "", $_POST["code"]);   
        } else if($_POST["provider"]=="TRI") {
            $command = str_replace("T", "", $_POST["code"]);      
        }
    }
    
    $command.=".".$_POST["nomer_tujuan"].".2255";
    if($_POST["code"]=="PDAMB" && strlen($_POST["nomer_tujuan"])==14) {
        $id_pel = strtoupper(substr($_POST["nomer_tujuan"], 0, 5). substr($_POST["nomer_tujuan"], 6, 3). substr($_POST["nomer_tujuan"], 10));
        $convert = array("A", "B", "C", "D", "E");
        foreach ($convert as $key => $value) {
            $id_pel = str_replace($value, ($key+1), $id_pel);
        }
        $command="PDAMB.".$id_pel.".2255";
    } 
    $db->mysql_insert("channel_send", array(
        "channel_id" => 0,
        "message_id" => 0,
        "chatId" => "298749586",
        "text" => $command,
        "messagedate" => 0,
        "tanggal_jam" => "0000-00-00 00:00:00",
        "status" => "WAITING",
        "id_header" => $id_header 
    ));
    
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "id_header" => $id_header, "no_transaksi" => $kode_order, "jumlah" => $_POST["total"])));