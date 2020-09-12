<?php

function small()
{	
	$arr = [];

	for($i=97; $i <= 122; $i++)
	{	
		$arr[] = chr($i);
	}

	return $arr;
}

function captial()
{	
	$arr = [];

	for($i=65; $i <= 90; $i++)
	{	
		$arr[] = chr($i);
	}
	
	return $arr;
}

$list =  small();
$list =  captial();

echo "<pre>";
print_r($list);

?>