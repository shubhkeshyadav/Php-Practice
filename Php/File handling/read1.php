<?php

$data = fopen("includes/test.txt",'r');

while(!feof($data)){
    $d = fgets($data);

    echo $d;
}

fclose($data);


$file = fopen("includes/test.txt",'a');

fwrite($file,"Hello"."\n");

fclose($file);






?>