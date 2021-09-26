<?php

    $app_name   = "SOGI";
    $app_year   = "2020";
    $server_url = "http://192.168.1.6/sogi-admin-web-master";
    
    session_start();
    error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
    
    //SET TIMEZONE
    date_default_timezone_set("Asia/Jakarta");
    
    define ("ROOT_PATH", realpath($root));
    define ("APP_NAME", $app_name);
    define ("APP_YEAR", $app_year);
    define ("HOME_URL", $server_url);
    define ("ADMINWEB_URL", $server_url."/adminweb");
    define ("SMARTY_DIR", $root."includes/Smarty-3.1.21/libs/");
    
    //BACKEND TEMPLATE
    define ("BACK_END_TEMPLATE", "back-end/penguin");
    define ("BACK_END_TEMPLATE_PATH", $root."templates/".BACK_END_TEMPLATE);
    define ("BACK_END_TEMPLATE_INCLUDE_PATH", ROOT_PATH."/templates/".BACK_END_TEMPLATE);    
    
    //SESSION NAME
    define("ADMIN_SESSION_NAME", "SESSION_ADMIN");
    
    //DATABASE CONFIG VARIABLE
    define("DB_HOST", "localhost:3305");
    define("DB_USER", "root");
    define("DB_PASSWORD", "qwe123");
    define("DB_DATABASE", "sogionline");
    
    //RAJA ONGKIR
    define("RAJA_ONGKIR_KEY", 'a5c7b61b1c73944917a11ad6c24360fa');
    define("RAJA_ONGKIR_TYP", 'pro');
    
    //ZENZIVZA
    define("ZENZIVZA_USER_KEY", "73y5ki");
    define("ZENZIVZA_PASS_KEY", "73y5kij");