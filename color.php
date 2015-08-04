<?php

$rgb = hex2rgb($_REQUEST['c']);
$image = imagecreate(10, 10);
$colorCode = imagecolorallocate($image, $rgb[0], $rgb[1], $rgb[2]);
imagefill($image, 0, 0, $colorCode);

header("Content-type: image/png");
imagepng($image);


// hex2rgb from http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}