<?php

$a = '9jfkjskjkjJLUIEJ#$%^&*82938fdsfjsd9f09234f34909-093049';

// 65 - 90 or 97 - 122

$i = 0;

$data = [];

while(isset($a[$i]))
{	
	$chr = $a[$i];

	$ord = ord($chr);

	if($ord >= 65 and $ord <=90)
	{
		$data['captial'][] = $chr;
	}
	elseif($ord >= 97 and $ord <=122)
	{
		$data['small'][] = $chr;
	}
	elseif($ord >= 48 and $ord <=57)
	{
		$data['number'][] = $chr;
	}
	else
	{
		$data['others'][] = $chr;	
	}

	$i++;
}

echo "<pre>";
print_r($data);

?>