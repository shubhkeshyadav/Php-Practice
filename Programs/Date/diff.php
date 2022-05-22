<?php

$date1 = "2022-05-01"; 
$date2 = "2022-05-31"; 

for($i= strtotime($date1) ; $i <= strtotime($date2); $i = strtotime(date('Y-m-d',$i)." +1 week"))
{
    $date3 = date('d D- F',$i);

    echo $date3.'<br>';
}

?>