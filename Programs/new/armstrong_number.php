<?php

    function getArmStrongNumber($number)
    {   
        $array  = str_split($number);
        $pod    = strlen($number);
        $i      = 0;
        $aNum   = 0;

        while(isset($array[$i]))
        {   
            $aNum += pow($array[$i],$pod);
            $i++;
        }

        if($aNum == $number)
        {
           return true;//echo 'No is armstrong';
        }
        else
        {
           return false;//echo 'No is not armstrong';

        }
    }

    $arr = [];
    foreach(range(10,1000) as $num)
    {
        $sttaus = getArmStrongNumber($num);
        if($sttaus)
        {
            $arr[] = $num;
        }
    }

    echo "<pre> Armstrong Numbers";
    print_r($arr);
    
    
?>