<?php

function fact($no)
{
    $f      =      1;
    $s      =    [];

    for($i=2;$i<=$no;$i++)
    {
        $f      =   $f*$i;
        $s[]    =   $i;
    }
    echo implode('*',$s).' -> '.$f;
}

fact(5);

?>