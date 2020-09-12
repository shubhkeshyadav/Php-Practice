<?php

function up($str)
{	
	$arr = [];

	for($i=0; $i <strlen($str); $i++)
	{
		if(ord($str[$i]) >= 65 && ord($str[$i]) <= 90)
		{	
			$arr[] = chr(ord($str[$i]));
			continue;
		}

		$arr[] = chr(ord($str[$i])-32);
	}

	return $arr;
}

$list =  up('sHuBhKeSh');

echo "<pre>";
print_r($list);

?>