<?php

function checkNoisPalindrome($no)
{
    $str    = (string)$no;
    $len    = strlen($str);
    $s      = '';
    for($i = $len-1; $i >=0; $i--)
    {
        $s.=$str[$i];;
    }

    return ($str == $s);
}

$arr = [];

foreach(range(1000,100000) as $no)
{
    if(checkNoisPalindrome($no))
    {
        $arr[] = $no;
    }
}

echo '<pre>';
print_r($arr);

?>