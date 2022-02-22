<?php

    function strtoup($str)
    {
        $i      =   0;
        $fstr   =   '';

        while(isset($str[$i]))
        {
            foreach(range(65,90) as $val)
            {   
                if(ord($str[$i])-32 == $val)
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
    echo strtoup($str);

?>