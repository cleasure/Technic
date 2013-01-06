<?php

header('Content-Type: image/png');

$img = getcwd()."/launcher/splash/1.png";

$im = @imagecreatefrompng($img);

if(!$im)
    {
        $im  = imagecreatetruecolor(600, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);
        imagefilledrectangle($im, 0, 0, 600, 30, $bgc);
        imagestring($im, 1, 5, 5, 'Error loading ' . $img, $tc);
    }


imagepng($im);
imagedestroy($im);

?>