<?php

function writeCaptcha($code)
{
    $myfile = fopen("public/test.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $code);
    fclose($myfile);
}

$image = imagecreate(50, 20); //create blank image (width, height)

$bgcolor = imagecolorallocate($image, 56, 138, 130); //add background color with RGB.

$textcolor = imagecolorallocate($image, 255, 255, 255); //add text/code color with RGB.

$code = rand(10000, 99999); //create a random number between 1000 and 9999

writeCaptcha($code);

imagestring($image, 10, 4, 3, $code, $textcolor); //create image with all the settings above.

header ("Content-type: image/png"); // define image type

imagepng($image); //display image as PNG

?>