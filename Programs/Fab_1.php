<?php

function fab($num)
{
	$a=1;
	$b=2;

	$fab = "$a-$b";
	for($i=1; $i <= $num; $i++)
	{ 
		$c = $a+$b;

		$a = $b;
		$b = $c;

		$fab.="-".$c;
	}
	return $fab;
}

echo fab(20);

?>