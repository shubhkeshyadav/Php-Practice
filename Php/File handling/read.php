<?php

$myfile = fopen('includes/test.txt','r');

//echo fgets($myfile); // read single line only

// read all data from file

while(!feof($myfile))
{
    echo fgets($myfile);
    echo '<br>';
}

?>