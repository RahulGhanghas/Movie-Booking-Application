<?php ob_start();
session_start();
header('content_type:image/jpeg');
$text=$_SESSION['secure'];
$font_size=30;
$width=200;
$height=40;
$image=imagecreate($width,$height);
imagecolorallocate($image, 255,255,255);
$text_color=imagecolorallocate($image, 0,0,0);
$font_path="abc.ttf";
for($x=1;$x<=30;$x++){
  $x1=rand(1,100);
  $y1=rand(1,100);
  $x2=rand(1,100);
  $y2=rand(1,100);
  imageline($image, $x1, $y1, $x2, $y2, $text);
}
imagettftext($image, $font_size, 0, 15, 30, $text_color, $font_path, $text);
imagejpeg($image);
?>