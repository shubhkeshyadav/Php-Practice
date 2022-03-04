<?php

function fact($no)
{   
    if($no == 1)
    {
        return $no;
    }

    return $no*fact($no-1);
}

echo fact(5);
?>