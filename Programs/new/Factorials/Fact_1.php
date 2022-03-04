<?php

function fact($no)
{	
	$fact = 1;

	$str = '';
	for($i=$no; $i >=2 ; $i--)
	{ 	
		$str.=$i.'*';
		$fact = $fact * $i;
	}

	return $str.'='.$fact;
}

echo fact(20);

?>