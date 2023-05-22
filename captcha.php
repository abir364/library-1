<?php
header("Content-Type: image/png");
session_start(); 
$text = 99999; 
$_SESSION["vercode"] = $text; 
$im = @imagecreate(110, 20)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  $text, $text_color);
imagepng($im);
imagedestroy($im);
?>
