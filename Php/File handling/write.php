<?php

$myfile = fopen('includes/test2.txt','a');
$txt = "Jane Doe\n";
fwrite($myfile,$txt);
fclose($myfile);

$open  = fopen("includes/test2.txt",'r');
while(!feof($open))
{
    echo fgets($open);
    echo "<br>";
}
fclose($open);

?>