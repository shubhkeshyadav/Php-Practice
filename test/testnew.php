<?php

$newarr = [];
function check_methods($var)
{   
    global $newarr;
    if(!in_array($var,$newarr))
    {
        $newarr[] = $var;
        return true;
    }
    
    return false;   
}


$finalArr = [];
$s = [2,4,5,6,6,7,4,3,5,6];

foreach($s as $value)
{    
    $status = check_methods($value);

    if($status)
    {
        $finalArr[] = $value;
    }
}

// echo '<pre>';
// print_r($finalArr);

$len = 5;
$char = '*';

echo '<table>';
for($i=0; $i<=$len; $i++)
{
    echo '&nbsp';
}
echo '*<br>';

for($i=0; $i<=$len; $i++)
{
    for($j=$len; $j > $i; $j--)
    {
        echo '&nbsp';
    }
    echo $char;

    for($k=0; $k < $i*2+1; $k++)
    {
        echo '&nbsp';
    }
    echo $char;

    echo '<br>';   
}

for($i=0; $i<=$len; $i++)
{
    for($j=0; $j < $i; $j++)
    {
        echo '&nbsp';
    }
    echo $char; 

    for($l=$len; $l > $i; $l--)
    {
        echo '&nbsp';
    }
    echo $char;

    echo '<br>';
}

for($i=0; $i<=$len; $i++)
{
    echo '&nbsp';
}
echo '*<br>';

echo '<table>';


?>