<?php

function disp($arr,$num)
{   
    $status = false;
   foreach($arr as $el1)
   {    
        $temp = 0;
        
        foreach($arr as $el2)
        {
            $sum = $el1+$el2;

            if($el1 != $el2 && $sum == $num)
            {
               $status = true;
               break; 
            }
        }
        
        if($status)
        {
            break;
        }
   }

   var_dump($status);exit;
}


function disp2($arr,$num)
{   
    $status = false;
    $sum = 0;
    
    foreach($arr as $k => $el)
    {    
        $next = isset($arr[$k+1])?$arr[$k+1]:0;
        $sum = $el+$next;

        if($sum == $num)
        {
           $status = true;
           break; 
        }
    }

   var_dump($status);exit;
}

$array  = [1,4,6,7,22,33,88];
$num    = 11;



disp2($array,$num);


=======================================================================================

duplicate delete

api




?>