<?php
    $root = "../../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);

    //validasi-validasi
    if(strlen($_POST["kode"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode produk harus diisi.")));
    } else {
        $data = $db->getFieldValue("produk", array("COUNT(*) AS TOTAL"), array("id_member" => $_POST["id_member"], "kode" => $_POST["kode"]));
        if($data[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode produk sudah ada.")));
        }
    }
    
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama produk harus diisi.")));
    }

    //get last id produk
    $_POST["id"] = $db->getLastNumber("produk", "id");
    unset($_POST["changes"]);
    
    $filename = array();
    $urutan = array();
    foreach ($_FILES as $key => $file) {
        if (strlen($file["name"])>0) {
            $i = 0;
            $namafile = $file['name'];
            while(file_exists(realpath($root) . "/uploads/produk/".$namafile)) {
                $i++;
                $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
                $name = rtrim($file['name'], ".".$ext);
                $namafile =$name."_".$i.".".$ext;
            }
            move_uploaded_file($file['tmp_name'], realpath($root) . "/uploads/produk/".$namafile);

            $count_file = count($filename);
            $filename[$count_file] = $namafile;
            $urutan[$count_file] = substr($key, -1);
        }
    }
    
    for($i=0; $i<20; $i++) {
        unset($_POST["filename_foto_".($i+1)]);
    }
    
    //INSERT GAMBAR PRODUK
    foreach($filename as $i => $value) {
        $db->mysql_insert("gambar_produk", array(
            "id" => $db->getLastNumber("gambar_produk", "id"),
            "id_produk" => $_POST["id"],
            "nama_file" => $value,
            "urutan" => $urutan[$i]
        ));
    }
    
    $db->mysql_update("gambar_produk", array("as_default" => "Y"), array("urutan" => $_POST["as_default"], "id_produk" => $_POST["id"]));
    unset($_POST["as_default"]);
    
    $_POST["gambar_utama"] = "";
    $data_gambar = $db->getFieldValue("gambar_produk", array("*"), array("id_produk" => $_POST["id"]), array(), 0, 0, " urutan ");
    foreach($data_gambar as $key => $value) {
        $db->mysql_update("gambar_produk", array("urutan" => $key+1), array("id" => $value["id"]));
        if($value["as_default"]=="Y") { $_POST["gambar_utama"] = $value["nama_file"]; };
    }
    
    $_POST["tanggal_create"] = date("Y-m-d H:i:s");
    $_POST["tanggal_update"] = date("Y-m-d H:i:s");
    $_POST["user_update"]    = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    
    
    $doc = new DOMDocument();
    $doc->loadHTML($_POST["penjelasan"]);
    $tags = $doc->getElementsByTagName('img');
    
    //COPY FILES
    $doc = new DOMDocument();
    $doc->loadHTML($_POST["penjelasan"]);
    $tags = $doc->getElementsByTagName('img');
    $img_src = "";
    foreach ($tags as $tag) {
        $src = $tag->getAttribute('src');
        if(substr($src, 0, 10)=="data:image") {
            $ext = substr($src, 11, strpos($src, ";")-strpos($src, "/")-1);
            $img = str_replace(substr($src, 0, strpos($src, ",")), '', $src);
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            $upload_directory=realpath($root) . "/uploads/produk/penjelasan/";            
            $file_name = $db->create_kode_unik().'.'.$ext;
            file_put_contents($upload_directory.$file_name, $data);
            $_POST["penjelasan"] = str_replace($src, HOME_URL."/uploads/produk/penjelasan/".$file_name, $_POST["penjelasan"]);
            $img_src.=$file_name.",";
        }
    }
    
    $_POST["img_src"] = rtrim($img_src, ",");
    
    $escape_quote = array();
    if(strlen($_POST["from_date_harga_diskon"])) {
        $temp = explode("-", $_POST["from_date_harga_diskon"]);
        $_POST["from_date_harga_diskon"] = $temp[2]."-".$temp[1]."-".$temp[0];
    } else {
        $_POST["from_date_harga_diskon"] = "NULL";
        array_push($escape_quote, "from_date_harga_diskon");
    }
        
    if(strlen($_POST["to_date_harga_diskon"])) {
        $temp = explode("-", $_POST["to_date_harga_diskon"]);
        $_POST["to_date_harga_diskon"] = $temp[2]."-".$temp[1]."-".$temp[0];
    } else {
        $_POST["to_date_harga_diskon"] = "NULL";
        array_push($escape_quote, "to_date_harga_diskon");
    }
    
    if(strlen($_POST["from_date_persen_diskon"])) {
        $temp = explode("-", $_POST["from_date_persen_diskon"]);
        $_POST["from_date_persen_diskon"] = $temp[2]."-".$temp[1]."-".$temp[0];
    } else {
        $_POST["from_date_persen_diskon"] = "NULL";
        array_push($escape_quote, "from_date_persen_diskon");
    }
        
    if(strlen($_POST["to_date_persen_diskon"])) {
        $temp = explode("-", $_POST["to_date_persen_diskon"]);
        $_POST["to_date_persen_diskon"] = $temp[2]."-".$temp[1]."-".$temp[0];
    } else {
        $_POST["to_date_persen_diskon"] = "NULL";
        array_push($escape_quote, "to_date_persen_diskon");
    }
    
    //insert data produk
    $db->mysql_insert("produk", $_POST, $escape_quote);
    $db->mysql_close();

    $_SESSION["alert_success"] = "Tambah data produk berhasil.";
    echo(json_encode(array("success" => true, "message" => "Tambah data produk berhasil.")));