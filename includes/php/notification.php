<?php    $akses = $db->getFieldValue("user_menu_akses", array("*"), array("id_menu" => $id_menu, "id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]), array(), 0, 0, "", isset($aksi)?"akses LIKE '%$aksi%'":"");    if(count($akses)==0) {        $db->mysql_close();        unset($_SESSION[ADMIN_SESSION_NAME]);        header("location: ".ADMINWEB_URL);        die();    }    $array_akses = array();     for($i=0; $i<strlen($akses[0]["akses"]); $i++) {        array_push($array_akses, $akses[0]["akses"][$i]);    }    $smarty->assign("array_akses", $array_akses);        //PESANAN BELUM LUNAS    $data = $db->getFieldValue("user_menu_akses", array("*"), array("id_menu" => 3, "id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]));    $smarty->assign("tampil_notif_belum_lunas", count($data)>0);    $total_belum_lunas = $db->getFieldValue(        "customer_order_header",         array("COUNT(*) AS TOTAL"),         array(),         array(), 0, 0, "", "status IN (0, 1)"    );    $smarty->assign("total_belum_lunas", $total_belum_lunas[0]["TOTAL"]);            //PESANAN SUDAH KONFIRMASI PEMBAYARAN    $data = $db->getFieldValue("user_menu_akses", array("*"), array("id_menu" => 6, "id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]));    $smarty->assign("tampil_notif_konfirmasi_bayar", count($data)>0);    $total_konfirmasi_bayar = $db->getFieldValue(        "konfirmasi_pembayaran",         array("COUNT(*) AS TOTAL"),         array("status" => 0)    );    $smarty->assign("total_konfirmasi_bayar", $total_konfirmasi_bayar[0]["TOTAL"]);        //PESANAN PERLU DIKEMAS    $data = $db->getFieldValue("user_menu_akses", array("*"), array("id_menu" => 28, "id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]));    $smarty->assign("tampil_notif_perlu_kemas", count($data)>0);    $total_perlu_kemas = $db->getFieldValue(        "customer_order_header",         array("COUNT(*) AS TOTAL"),         array("status" => 2)    );    $smarty->assign("total_perlu_kemas", $total_perlu_kemas[0]["TOTAL"]);        //NOTIF PELANGGAN BARU    $data = $db->getFieldValue("user_menu_akses", array("*"), array("id_menu" => 7, "id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]));    $smarty->assign("tampil_notif_pelanggan_baru", count($data)>0);        $total_new_pelanggan = $db->getFieldValue("member AS A", array("COUNT(*) AS TOTAL"), array("A.is_open" => 0));    $smarty->assign("total_pelanggan_baru", $total_new_pelanggan[0]["TOTAL"]);            //NOTIF MESSAGE    $data = $db->getFieldValue("user_menu_akses", array("*"), array("id_menu" => 17, "id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"]));    $smarty->assign("tampil_notif_pesan_baru", count($data)>0);    $total_new_message = $db->getFieldValue(        "message AS A",         array("COUNT(*) AS TOTAL"),         array("A.user_read" => 0),         array(), 0, 0, "", "A.grup<>1"    );    $smarty->assign("total_pesan_baru", $total_new_message[0]["TOTAL"]);                                //MENU    $listmenu = array();        $sql = "SELECT * FROM ((SELECT A.* FROM menu AS A WHERE A.parent_id=0 AND A.is_menu='N') UNION ALL (SELECT B.* FROM user_menu_akses AS A LEFT JOIN menu AS B ON A.id_menu=B.id WHERE A.id_user=".$_SESSION[ADMIN_SESSION_NAME]["user"]["id"]." AND B.parent_id=0)) AS T ORDER BY T.urutan";    $db->mysql_query($sql, $rec_count, $menu);        foreach ($menu as $key => $value) {        $menu[$key]["submenu"] = $db->getFieldValue("user_menu_akses AS A LEFT JOIN menu AS B ON A.id_menu=B.id", array("B.*"), array("A.id_user" => $_SESSION[ADMIN_SESSION_NAME]["user"]["id"], "B.parent_id" => $value["id"]), array(), 0, 0, "B.urutan");        if($value["is_menu"]=="Y" OR count($menu[$key]["submenu"])>0) {  $listmenu[count($listmenu)] = $menu[$key]; }    }    //print_r($listmenu);    $smarty->assign("listmenu", $listmenu);        $smarty->assign("appname", APP_NAME);    $smarty->assign("appyear", APP_YEAR);    $smarty->assign("homeurl", HOME_URL); 