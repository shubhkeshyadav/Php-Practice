<?php

function prime($limit)
{	
	$arr = [];

	for ($num=$limit; $num <= $limit; $num++)
	{	
		$cube = 0;
		for ($i=0; $i < strlen($num); $i++)
		{	
			$num = (string)$num;
			$cube += $num[$i]*$num[$i]*$num[$i];		
		}

		echo $cube,',';

		if($num == $cube)
		{
			$arr[] = $num;
		} 	
	}

	return $arr;
}

$list =  prime(1643);

echo "<pre>";
print_r($list);

?>