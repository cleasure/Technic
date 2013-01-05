<?php

$img = "launcher/splash/1.png";

$im = @imagecreatefrompng($img);

header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);

?>