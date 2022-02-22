<?php

    function strtolow($str)
    {
        $i      =   0;
        $fstr   =   '';

        while(isset($str[$i]))
        {
            foreach(range(97,122) as $val)
            {   
                if(ord($str[$i])+32 == $val)
                {
                    $fstr.=chr($val);
                }

                if(ord($str[$i]) == $val)
                {
                    $fstr.=chr($val);
                }
            }

            $i++;
        }

        return $fstr;
    }

    $str = 'shubHdkdLLLLLLLLLLLLLLl';
    echo strtolow($str);

?>