<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $_limit = 50;    
    //$status = array("GAGAL.", "GAGAL,", "GAGAL", "terlambat", "sdh pernah", "Format tdk dikenal", "SKSES.", "SKSES,", "SKSES", "SUKSES.", "SUKSES,", "SUKSES");
    $status = array("GAGAL.", "GAGAL", "terlambat", "sdh pernah", "Format tdk dikenal", "SKSES.", "SKSS.");
    
    for($i=0; $i<12; $i++) {
        sleep(5);
    
        $data = $db->getFieldValue("channel_send AS A LEFT JOIN ppob_transaksi AS B ON A.id_header=B.id LEFT JOIN member AS C ON B.id_member=C.id", array("A.*", "COALESCE(B.id_member, 0) AS id_member", "COALESCE(B.total, 0) AS total", "COALESCE(B.kode, '') AS kode", "COALESCE(C.phone, '') AS phone"), array("A.status" => "ON PROCESS"), array(), $_limit, 0, " A.channel_id ", " A.channel_id>0 ");
        foreach($data as $value) {

            $status_trx = ""; $keterangan_trx = "";
            $check = $db->getFieldValue("channel", array("*"), array("replyToMessageId" => $value["channel_id"]));
            foreach($check as $value_check) {
                if(strlen($status_trx)==0) {
                    foreach ($status as $key => $contain) {
                        if (($pos = strpos($value_check["text"], $contain)) !== FALSE) {
                            $status_trx = $key>4?"SUCCESS":"FAILED";
                            $keterangan_trx = substr($value_check["text"], strpos($value_check["text"], $contain) + ($key==0 || $key==4?strlen($contain):0));
                            $keterangan_trx = trim(substr($keterangan_trx, 0, strpos($keterangan_trx, (($key==5||$key==6)?"Sldo":"."))));
                            
                            $kalimat_depan = trim(str_replace("R#", "", substr($value_check["text"], 0, strpos($value_check["text"], $contain))));
                            $temps = explode(" ", $kalimat_depan);
                            $temps_last = explode(".", $temps[count($temps)-1]);
                            $keterangan_trx = trim(str_replace($temps_last[0].".", "", $kalimat_depan)) . " " . ($status_trx=="SUCCESS"?"BERHASIL":"GAGAL") . ". " . $keterangan_trx;

                            if($status_trx=="SUCCESS") {
                                $keterangan_trx = str_replace($contain, "", $keterangan_trx);
                            }
                            break;
                        }
                    }
                } else {
                    break;
                }        
            }

            if(strlen($status_trx)>0) {
                $keterangan_trx = str_replace("admin1600", "", $keterangan_trx);
                $temps = explode("Rp.", $keterangan_trx);
                if(count($temps)==2) {
                    $temps_last = explode("/", $temps[1]);
                    $keterangan_trx = str_replace(trim($temps_last[0]), $value["total"], $keterangan_trx);
                }
                echo $status_trx." --> " . $keterangan_trx."\n";
                if(strlen($value["phone"])>0) {
                    $db->mysql_insert("channel_msg_send", array("no_hp" => $value["phone"], "msg" => $keterangan_trx, "status" => "WAITING"));
                }
                $db->mysql_update("ppob_transaksi", array("status_trx" => $status_trx, "keterangan_trx" => $keterangan_trx), array("id" => $value["id_header"]));
                $db->mysql_update("channel_send", array("status" => "DONE"), array("id" => $value["id"]));

                if($status_trx=="FAILED") {
                    //SALDO MEMBER NAMBAH
                    $sql = "UPDATE member SET saldo=saldo+".$value["total"]." WHERE id='".$value["id_member"]."'";
                    $db->mysql_execute($sql);

                    //HISTORI TRANSAKSI
                    $tanggal_jam =  date("Y-m-d H:i:s");
                    $db->mysql_insert("h_trx", array(
                        "id_member" => $value["id_member"],
                        "kode"   => substr($value["kode"], 0, 3),
                        "jenis"  => "K",
                        "id_ref" => $value["id_header"],
                        "jumlah" => $value["total"],
                        "tanggal_jam" => $tanggal_jam
                    ));
                }
            }        
        }
    }
    
    $db->mysql_close();
    die(json_encode(array("success" => true, "create" => date("Y-m-d H:i:s"))));