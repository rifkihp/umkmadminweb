<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    include_once($root."includes/phpjasperxml-master/PHPJasperXML/class/tcpdf/tcpdf.php");
    include_once($root."includes/phpjasperxml-master/PHPJasperXML/class/PHPJasperXML.inc.php");
    
    
    $data = $db->getFieldValue("customer_order_header AS A", array("A.kode"), array("A.id" => $_GET["kode"]));
    $nama_f = $db->create_kode_unik() . ".png";
    $url = ADMINWEB_URL."/barcode.php?codetype=Code39&size=40&text=".$data[0]["kode"];
    $img = realpath($root) . "/uploads/barcode/" . $nama_f;
    file_put_contents($img, file_get_contents($url));
    
    $PHPJasperXML = new PHPJasperXML("en","TCPDF");
    //$PHPJasperXML->debugsql=true;
    
    $filename = "penjualan.jrxml";
    $report_path = realpath($root."reports");
    $xml =  simplexml_load_file($report_path ."/" . $filename);
    
    $PHPJasperXML->arrayParameter= array("KODE" => "'".$_GET["kode"]."'", "BARCODE" => $nama_f, "PATH" => realpath($root));
    $PHPJasperXML->xml_dismantle($xml);

    //die("tes: ".$db->db_name." -- ".$report_path ."/" . $filename);
    $PHPJasperXML->transferDBtoArray($db->db_host, $db->db_user, $db->db_pass, $db->db_name);
    $db->mysql_close();
    $PHPJasperXML->outpage("I");
    unlink($img);