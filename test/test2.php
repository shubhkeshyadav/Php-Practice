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

$len = 3;
$char = '@';

echo '<table>';
echo '<tr>';
for($i=0; $i<=$len; $i++)
{
    echo '<td>&nbsp</td>';
}
echo "<td>$char</td>";

echo '</tr>'; 


for($i=0; $i<=$len; $i++)
{   
    echo '<tr>';
    for($j=$len; $j > $i; $j--)
    {
        echo '<td>&nbsp</td>';
    }
    echo "<td>$char</td>";
    for($k=0; $k < $i*2+1; $k++)
    {
        echo '<td>&nbsp</td>';
    }
    echo "<td>$char</td>";

    echo '</tr>';  
}

for($i=0; $i<=$len; $i++)
{   
    echo '<tr>';
    for($j=0; $j < $i; $j++)
    {
        echo '<td>&nbsp</td>';
    }
    echo "<td>$char</td>";

    for($l=$len*2+1; $l > $i*2; $l--)
    {
        echo '<td>&nbsp</td>';
    }
    echo "<td>$char</td>";

    echo '</tr>';
}

echo '<tr>';
for($i=0; $i<=$len; $i++)
{
    echo '<td>&nbsp</td>';
}
echo "<td>$char</td>";
echo '</tr>';

echo '<table>';


?>