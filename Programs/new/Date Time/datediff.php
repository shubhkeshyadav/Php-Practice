<?php

$date1 = '2022-04-01';
$date2 = '2022-04-08';

$obj1 = new DateTime($date1);
$obj2 = new DateTime($date2);

$diff  = $obj1->diff($obj2);

echo '<pre>';
print_r($diff);

?>