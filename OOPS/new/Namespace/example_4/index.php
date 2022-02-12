<?php

include 'include_1.php';
include 'include_2.php';

$obj_1 = new \n1\Person;
$obj_2 = new \n2\Person;

print_r($obj_1);
print_r($obj_2);

echo '<br>*********************************<br>';

echo \n1\disp();
echo \n2\disp();

echo '<br>*********************************<br>';

echo \n1\SOMETHING;
echo \n2\SOMETHING;

echo '<br>*********************************<br>';

use \n1\Person AS p1;	
use \n2\Person AS p2;

$obj_1 = new p1;
$obj_1->getName();

$obj_2 = new p2;
$obj_2->getName();

use function n1\disp AS disp_1;
use function n2\disp;

disp_1();
disp();

use const \n1\SOMETHING AS s1;
use const \n2\SOMETHING AS s2;

echo s1;
echo s2;



?>