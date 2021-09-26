<?php
    $root = "../";
    include $root."includes/php/initial.php";
    
    $url = realpath($root).str_replace(HOME_URL, "", $_GET['url']);
    $new_height = $_GET['height'];
    $new_width = $_GET['width'];
    
    $ext = strtolower(substr($url, strrpos($url, '.') + 1));
    header("content-type: image/".$ext);
    
    $image = imagecreatefromjpeg($url);
    if($ext=="gif") {
        $image = imagecreatefromgif($url);
    } else if($ext=="png") {
        $image = imagecreatefrompng($url);
    } /*else if($ext=="jpg" OR $ext=="jpeg") {
    }*/
     
    $orig_width = imagesx($image);
    $orig_height = imagesy($image);
    
    
    $width = $orig_width;
    $height = $orig_height;
    if($width<$new_width) {
        $width = $new_width;
        $height+=($new_width-$width); 
    }
    
    if($height<$new_height) {
        $height = $new_height;
        $width+=($new_height-$height); 
    }
    
    
    
    
    // Load
    $thumb = imagecreatetruecolor($new_width, $new_height);
    imagealphablending($thumb, false);
    imagesavealpha($thumb, true);
    
    /***** kalo mau transparant *********/
    $transparent = imagecolorallocatealpha($thumb, 255, 255, 255, 127);
    imagefilledrectangle($thumb, 0, 0, $new_width, $new_height, $transparent);
    /******************************/
    
    /*** untuk kasih background ***/
    //$backgroundColor = imagecolorallocate($thumb, 234, 232, 232);
    //imagefill($thumb, 0, 0, $backgroundColor);
    /******************************/
    
    
    
    
    /*if ($orig_width > $orig_height) {
        $percent = ($new_width / $orig_width);
    } else {
        $percent = ($new_height / $orig_height);
    }
    
    $width = ceil($orig_width * $percent);
    $height = ceil($orig_height * $percent);
    */
    
    $x = ceil(($new_width-$width)/2);
    $y = ceil(($new_width-$height)/2);
    
    
    imagecopyresized($thumb, $image, $x, $y, 0, 0, $width, $height, $orig_width, $orig_height);
    
    
    
    imagejpeg($thumb);