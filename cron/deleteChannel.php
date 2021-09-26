<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $sql = "DELETE FROM channel WHERE DATE_FORMAT(tanggal_jam, '%Y-%m-%d') <= DATE_FORMAT(DATE_ADD(NOW(), INTERVAL -3 DAY), '%Y-%m-%d')";
    $db->mysql_execute($sql);
    $db->mysql_close();
    
    die(json_encode(array("success" => true, "create" => date("Y-m-d H:i:s"))));