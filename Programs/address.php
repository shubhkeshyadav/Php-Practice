<?php

$a = '5';

echo $a.'<br>';

$b = &$a;

echo $b.'<br>';

$b = "2$b";

echo $b.'<br>';

?>