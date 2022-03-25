<?php

$a = 133; /* global scope */ 

function test()
{ 
    echo $a; /* reference to local scope variable and it will display one error*/ 

    echo 'Way first <br>';
    global $a;

    echo $a.'<br>';

    echo 'Way 2nd <br>';

    echo $GLOBALS['a'];
} 

test();

?>