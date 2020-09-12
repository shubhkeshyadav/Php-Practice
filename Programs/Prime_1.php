<?php

function prime($num)
{	
	$arr = [];

	for ($no=2; $no < $num; $no++)
	{	
		$f = true;
		for ($j=2; $j < $no; $j++)
		{
			if($no%$j == 0)
			{
				$f = false;
				break;		
			}
		} 	

		if($f)
		{
			$arr[] = $no;
		}
	}

	return $arr;
}

$list =  prime(100);

echo "<pre>";
print_r($list);

?>