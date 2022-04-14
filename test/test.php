<?php

$x = 8;
$y = 8.0;
$resp =  ($x === $y);

var_dump($resp);

$number = 4;

function fact($number)
{   
    $fact = 1;
    $s  = (string) $number;

    for($i=2;$i<=$number;$i++)
    {
        $fact = $fact*$i;
    }

    echo $fact;

}

fact($number);

// git

// git reset --hard commit_id

//

?>