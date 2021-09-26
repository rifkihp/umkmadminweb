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
    $id_header = $db->getLastNumber("ppob_trx_deposit", "id");
    $kode_order = $db->getLastNumber("ppob_trx_deposit", "kode", 4, "DPT-".date("Ymd")."-");
    $kode_unik = $db->create_kode_unik(2);
    
    if(strlen($_POST["metode_pembayaran"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Metode pembayaran harus diisi.")));
    }
    
    //SAVE DEPOSIT
    $tanggal_jam = date("Y-m-d H:i:s");
    $db->mysql_insert("ppob_trx_deposit", array(
        "id" => $id_header,
        "id_member" => $id_member,
        "kode" => $kode_order,
        "tanggal_jam" => $tanggal_jam,
        "pembayaran" => $_POST["metode_pembayaran"],
        "total" => $_POST["total_deposit"],
        "kode_unik" => $kode_unik,
        "date_update_status" => $tanggal_jam,
        "date_create" => $tanggal_jam,
        "date_update" => $tanggal_jam,
        "status" => "0" 
    ));
    
    //INSERT BANK TRANSFER
    $db->mysql_delete("ppob_trx_deposit_transfer_bank", array("id_header" => $id_header));
    $db->mysql_insert("ppob_trx_deposit_transfer_bank", array(
        "id_header" => $id_header,
        "bank_id" => $_POST["bank_id"],
        "no_rekening" => $_POST["bank_no_rekening"],
        "nama_pemilik_rekening" => $_POST["bank_nama_pemilik_rekening"],
        "nama_bank" => $_POST["bank_nama"],
        "cabang" => $_POST["bank_cabang"]
    ));
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "message" => "Proses deposit berhasil. Silahkan lakukan pembayaran.", "no_transaksi" => $kode_order, "jumlah" => $_POST["total_deposit"])));