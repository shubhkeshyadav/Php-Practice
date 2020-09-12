<?php

$arr = [1,8,5,3];
$len = count($arr);

for($i=0; $i < $len ; $i++)
{ 	
	for($j=0; $j < $len-1 ; $j++)
	{ 	
		if($arr[$j] > $arr[$j+1])
		{
			$temp = $arr[$j+1];

			$arr[$j+1] = $arr[$j];

			$arr[$j] = $temp;
		}	
	}	
}

echo "<pre>";
print_r($arr);



?>