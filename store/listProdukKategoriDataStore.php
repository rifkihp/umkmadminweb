<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_limit    = 10;
    $_page     = $_POST["page"];
    $kategori = $db->checkIntegerRange($_POST["id"])?$_POST["id"]:0;
    
    //get total
    $sql = "SELECT COUNT(*) AS TOTAL FROM produk_to_category AS A LEFT JOIN produk AS B ON A.id_produk=B.id WHERE A.id_kategori IN (SELECT id FROM category WHERE (id='".$kategori."' OR id_parent='".$kategori."')) " . (strlen($query)>0?" AND (B.kode LIKE '%$query%' OR B.nama LIKE '%$query%' OR B.keyword LIKE '%$query%')":"") . " GROUP BY A.id_produk ";
    $db->mysql_query($sql, $rec_count, $rs);
    //echo($sql);
    $nbrows = $rs[0]["TOTAL"];
    
    $data = array();
    if($nbrows>0) {
        $data = $db->getFieldValue("produk_to_category AS A LEFT JOIN produk AS B ON A.id_produk=B.id", array("B.*"), array(), array(), $_limit, $_limit*($_page-1), " B.tanggal_update DESC ",  " A.id_kategori IN (SELECT id FROM category WHERE (id='".$kategori."' OR id_parent='".$kategori."')) " . (strlen($query)>0?" AND (B.kode LIKE '%$query%' OR B.nama LIKE '%$query%' OR B.keyword LIKE '%$query%')":"") . " GROUP BY A.id_produk ");
        
        foreach($data as $key => $value) {
            $data_gambar = $db->getFieldValue("gambar_produk", array("nama_file"), array("id_produk" => $value["id"]));
            $data[$key]["foto1_produk"] = $data_gambar[0]["nama_file"];        
            $data[$key]["nama"] = $db->limitTextKonten($value["nama"], 15);

            $harga_jual = $value["harga_jual"];
            if(isset($_SESSION[CLIENT_SESSION_NAME]["user"])) {
                $tipe_user = $_SESSION[CLIENT_SESSION_NAME]["user"]["jenis_user"];
                $sql = "SELECT harga_jual FROM harga_jual_user WHERE id_produk='".$value["id"]."' AND tipe_user='$tipe_user' AND harga_jual>0";        
                $db->mysql_query($sql, $rec_count_harga_jual, $data_harga_jual);
                $harga_jual = $rec_count_harga_jual>0?$data_harga_jual[0]["harga_jual"]:$value["harga_jual"];
            }

            $harga_spesial = 0;
            $diskon = str_replace("%", "", $value["persen_diskon"])*0.01;
            if($value["tipe_diskon"]=="persentase" && $diskon>0) {
                $harga_spesial = $harga_jual-($harga_jual*$diskon);
            } else if($value["tipe_diskon"]=="nominal" && $value["harga_diskon"]>0) {
                $harga_spesial = $value["harga_diskon"];   
            }

            $data[$key]["harga_jual"] = $harga_jual>0?("Rp. ".number_format($harga_jual, 0, '.', ',')):"";
            $data[$key]["harga_spesial"] = $harga_spesial>0?("Rp. ".number_format($harga_spesial, 0, '.', ',')):"";
        }
    
        /*$sql = "SELECT id, DATE_FORMAT(tanggal, '%d-%m-%Y') AS tgl, judul, konten, gambar FROM mokes_berita WHERE 1 " . 
                (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%' OR A.keyword LIKE '%$query%')":"") .
                "ORDER BY id DESC LIMIT ".(($_page-1)*$_limit).",".$_limit;
        $db->mysql_query($sql, $rec_count, $data);
        foreach ($data as $key => $value) {
            $data[$key]["header"] = $db->limitTextKonten($data[$key]["konten"], 150);    
        }*/
        
    }
    $db->mysql_close();
     
    $rasult = array(
        "totalCount" => $nbrows,
        "topics" => $data,
        "next_page" => $_page+(count($data)==0?0:1)
    );
    
    die(json_encode($rasult));