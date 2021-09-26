<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    
    $db = new classUtama();
    $db->mysql_connect(true);
    
    
    $result = array(
        "bg" => "3321098.jpg",
        "logo" => "1120909.png",
        "welcome_text" => "Selamat datang di tokoonline kami ini!"
    );    
    $db->mysql_close();
    echo(json_encode($result));