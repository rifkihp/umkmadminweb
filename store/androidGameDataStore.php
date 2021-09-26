<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    $sql = "SELECT id, operator_sub AS kode, provider_sub AS nama  FROM ppob_produk WHERE provider='GAME' GROUP BY operator_sub ORDER BY provider_sub";
    $db->mysql_query($sql, $rec_count, $result);
    $db->mysql_close();

    die(json_encode(array("topics" => $result)));