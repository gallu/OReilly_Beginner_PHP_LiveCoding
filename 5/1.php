<?php
//var_dump( gd_info() );

//
$img = imagecreatetruecolor(300, 300);

// 塗りつぶし矩形
$color = imagecolorallocate($img, 100, 100, 255);
imagefilledrectangle($img, 50, 50, 100, 100, $color);

// 矩形
$color = imagecolorallocate($img, 100, 255, 0);
imagerectangle($img, 20, 20, 50, 50, $color);

// 線
$color = imagecolorallocate($img, 255, 0, 0);
imageline($img, 150, 0, 200, 200, $color);

// 文字
$text_color = imagecolorallocate($img, 233, 14, 91);
imagestring($img, 5, 10, 10,  'A Simple Text String', $text_color);
//imagestring($img, 3, 20, 250, 'A Simple Text String 2', $text_color);
imagestring($img, 3, 20, 250, $_GET['text'], $text_color);

//
header('Content-Type: image/png');
//ob_start();
imagepng($img);
//$img _string = ob_get_contents();
//ob_end_clean();
