<?php

$a = [10,10,20,30,20,22,20];

echo '<pre>';

$fArray = [];

foreach($a as $el)
{   
    $fArray[$el][] = $el;
}

$aa = [];
foreach($fArray as $arr)
{   
    if(count($arr) > 1)
    {
        $aa[] = end($arr);
    }
}

// duplicate values
print_r($aa);



?>