<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    //$data_banner = $db->getFieldValue("banner", array("id", "nama", "id_kategori AS kategori", "filename AS banner"), array("is_aktif" => "Y"));
    
    $_paretnt_id = $_POST["id"];
    
    //data induk;
    $sql_induk = "SELECT A.id, A.nama, A.penjelasan, A.header FROM category AS A WHERE A.id_parent=$_paretnt_id ORDER BY A.nama";
    $db->mysql_query($sql_induk, $rec_count, $data);    
    $db->mysql_close();
     
    $rasult = array(
        //"banner" => $data_banner, 
        "topics" => $data
    );
    
    die(json_encode($rasult));