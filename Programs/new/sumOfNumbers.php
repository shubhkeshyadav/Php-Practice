<?php

$no     = 99999;
$total  = 0;

while($no > 1)
{
    $total += $no%10;
    $no = $no/10;
}

?>