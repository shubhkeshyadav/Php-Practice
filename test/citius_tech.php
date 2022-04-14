<?php

/*
    
*/

$array1 = [1,2,3,4,5];
$array2  = [2,3,1,0,5];

$newArr = [];
foreach($array1 as $el)
{   
    if(!in_array($el,$array2))
    {
        $newArr[] = $el;
    }
}


for($i = 0; $i < count($array2); $i++)
{
    for($j = 0; $j < count($array2)-1; $j++)
    {
        if($array2[$j] > $array2[$j+1])
        {
            $temp = $array2[$j+1];
            $array2[$j] = $array2[$j+1];
            $array2[$j+1] = $temp;
        }
    }   
}


Class Test
{
    public function __construct()
    {

    }
}

$arr = [1,2,4,5,3,2,5,8];

$new = [];
foreach($arr as $el)
{
    $new[$el][] = $el;
}

$duplicates = [];
foreach($new as $key => $arr)
{
    if(count($arr) > 1)
    {
        $duplicates[] = $key;
    }
}

$str = 'citius tech';
$len = strlen($str);
$rev = '';
for($i = $len;$i >= 0 ;$i--)
{
    $rev .= isset($str[$i])?$str[$i]:'';
}

//select * from table order by id desc limit 0,6

//select * from table order by id ASC limit 5

//select name,max(ctc) group by dept_id

//

?>