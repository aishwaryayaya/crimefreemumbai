<?php
session_start();
$rand_num=rand(11111,99999);
$_SESSION['code']=$rand_num;
$layer=imagecreatetruecolor(60, 30);
    
$captcha_bg=imagecolorallocate($layer,255,160,120);
imagefill($layer,0,0,$captcha_bg);
$captch_text_color=imagecolorallocate($layer,0,0,0);
imagestring($layer,5,5,5,$rand_num,$captch_text_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);
?>

