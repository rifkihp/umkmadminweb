<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama();
    $db->mysql_connect(true);
    
    function listKategori($_paretnt_id) {
        global $db;
        
        $sql = "SELECT A.id, A.nama, A.penjelasan, A.header, IF(B.TOTAL_CHILD IS NULL, 0, 1) AS haveachild FROM category AS A LEFT JOIN (SELECT id_parent, COUNT(*) AS TOTAL_CHILD FROM category GROUP BY id_parent) AS B ON A.id=B.id_parent WHERE A.id_parent='$_paretnt_id' ORDER BY A.nama";
        $db->mysql_query($sql, $rec_num, $data);    
        for ($i = 0; $i < $rec_num; $i++) {
            $data[$i]["subkategori"] = listKategori($data[$i]["id"]);
        }
        
        return $data;
    }
    
    $result = array(
        "kategori" => listKategori(0)
    );
    
    $db->mysql_close();
    die(json_encode($result));