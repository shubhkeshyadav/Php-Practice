<?php

$a = 5;

$b = 6;

//method 1st
list($b,$a) = [$a,$b];
echo $a.'-'.$b;
echo '<br>';

//method 2nd

$a = 5;

$b = 6;

$b = $a+$b;

$a = $b-$a;
$b = $b-$a;
echo $a.'-'.$b;

?>