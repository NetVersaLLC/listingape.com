<?php
session_start();

$im = imagecreatetruecolor(160,30);
$im_src = imagecreatefromjpeg("./captcha.jpg");
imagecopyresampled($im,$im_src,0,0,0,0,160,40,155,40);

$black = imagecolorallocate($im,255,255,255);

$font = "./captcha.ttf";
$size = 22;
$angel = 0;

$string = $_SESSION["myCAPTCHA"];

$x = 30;
$y = 25;

imagefttext($im,$size,$angel,$x,$y,$black,$font,$string); 

header("Content-type: image/jpeg"); 
imagejpeg($im);
imagedestroy($im);

?>