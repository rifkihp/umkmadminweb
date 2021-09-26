<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $id_trx = $_POST["id_trx"];
    
    //DETAIL PASIEN
    $detail_pasien = $db->getFieldValue("customer_order_header", array(
        "id",
        "nama",
        "alamat",
        "latitude",
        "longitude",
        "id_propinsi AS province_id",
        "nama_propinsi AS province",
        "id_kota AS city_id",
        "nama_kota AS city_name",
        "id_kecamatan AS subdistrict_id",
        "nama_kecamatan AS subdistrict_name",
        "kode_pos",
        "no_hp"
    ), array("id" => $id_trx));
    
    //JADWAL TERAPI
    $jadwal_terapi = $db->getFieldValue("customer_order_jadwal_terapi AS A LEFT JOIN customer_order_header AS B ON A.id_header=B.id", array(
        "A.id",
        "DATE_FORMAT(A.tanggal_terapi, '%d-%m-%Y') AS tanggal_terapi", 
        "A.jam_terapi",
        "A.riwayat_kesehatan"
    ), array(
        "B.id" => $id_trx
    ));
    
    //DATA MITRA
    $detail_mitra = $db->getFieldValue("
        member AS A LEFT JOIN 
        customer_address AS B ON A.id=B.id_member AND B.as_default=1 LEFT JOIN 
        customer_order_header AS C ON A.id=C.id_mitra", 
    array(
        "A.id",
        "CONCAT(A.first_name, ' ', A.last_name) AS nama", 
        "B.no_hp", 
        "A.email",
        "B.alamat",
        "B.latitude",
        "B.longitude",
        "B.id_propinsi AS province_id",
        "B.nama_propinsi AS province",
        "B.id_kota AS city_id",
        "B.nama_kota AS city_name",
        "B.id_kecamatan AS subdistrict_id",
        "B.nama_kecamatan AS subdistrict_name",
        "B.kode_pos",
        "A.photo",
        "A.aktif",
        "A.admin"
    ), array(
        "C.id" => $id_trx
    ));
    $detail_mitra[0]["aktif"] = $detail_mitra[0]["aktif"]==1 && $detail_mitra[0]["admin"]==1;
    
    //DETAIL PRODUK
    $detail_order = $db->getFieldValue("
        customer_order_detail AS A LEFT JOIN 
        customer_order_header AS B ON A.id_header=B.id", 
    array(

        "A.id_produk AS id", 
        "A.kode", 
        "A.nama",
        
        "A.gambar AS foto1_produk", 

        "A.satuan",
        "A.harga_beli", 
        "A.harga_jual", 
        "A.harga_diskon", 
        "A.persen_diskon", 
        "A.berat",

        "A.ukuran", 
        "A.warna", 

        "A.jumlah AS qty", 

        "A.sub_total AS subtotal", 
        "A.grand_total AS grandtotal"
    ), 
        array(
        "B.id" => $id_trx
    ));
    

    //DETAIL PRODUK
    $gtotal = $db->getFieldValue("
        customer_order_header AS A", 
    array(
        "A.total", 
        "0 AS diskon",
        "A.total-0 AS subtotal",
        "A.voucher",
        "A.ongkir", 
        "A.grandtotal"
    ), 
        array(
        "A.id" => $id_trx
    ));

    $db->mysql_close();
    die(json_encode(array(
        "detail_pasien" => $detail_pasien[0], 
        "jadwal_terapi" => $jadwal_terapi[0], 
        "detail_mitra" => $detail_mitra[0], 
        "topics" => $detail_order, 
        "gtotal" => $gtotal[0]   
    )));
            