<?php

function factor($no)
{
    for($i=2;$i<=$no;$i++)
    {
        if($no%$i == 0)
        {
            echo $i;
            $no = $no/$i;
        }
    }

    echo $no;
}

factor(28);


?>