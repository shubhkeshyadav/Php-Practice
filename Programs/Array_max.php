<?php

$arr = [1,8,5,3];

$max_1 = 0;
$max_2 = 0;
$max_3 = 0;
$temp = '';

$arr_temp = [];

for($i=0;$i<count($arr);$i++)
{	
	if($arr[$i] > $max_1)
	{	
		$max_3 = $max_2;
		$max_2 = $max_1;
		$max_1 = $arr[$i];
	}
	else if($arr[$i] > $max_2 && $arr[$i] != $max_2)
	{	
		$max_3 = $max_2;
		$max_2 = $arr[$i];
	}
	else if($arr[$i] > $max_3 && $arr[$i] != $max_3)
	{
		$max_3 = $arr[$i];
	}
}

print_r($max_1);
print_r($max_2);
print_r($max_3);

?>