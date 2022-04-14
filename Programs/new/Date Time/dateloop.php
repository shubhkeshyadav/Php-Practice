<?php

$date1 = '2022-04-01';
$date2 = '2022-04-08';

$n = date('Y-m-d',strtotime($date1.' +1 day'));

for($i= strtotime($date1) ; $i<= strtotime($date2) ; $i = $i+86400)
{
    echo date('Y-m-d',$i);

    echo '<br>';
}

echo '<br>';

$date1 = new DateTime('2022-04-01');
$date2 = new DateTime('2022-04-08');

$date22 =  $date1->modify('+3 day');

?>