<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    $_paretnt_id = $_POST["induk"];
    $sql_induk = "SELECT A.id, A.nama, A.penjelasan, A.header, IF(B.TOTAL_CHILD IS NULL, 0, 1) AS haveachild FROM category AS A LEFT JOIN (SELECT id_parent, COUNT(*) AS TOTAL_CHILD FROM category GROUP BY id_parent) AS B ON A.id=B.id_parent WHERE A.id_parent='$_paretnt_id' ORDER BY A.nama";
    $db->mysql_query($sql_induk, $rec_count, $data);    
    $db->mysql_close();
     
    $rasult = array(
        "topics" => $data
    );
    
    die(json_encode($rasult));