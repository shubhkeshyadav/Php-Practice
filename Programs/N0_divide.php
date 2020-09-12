<?php

$no 		= 30;
$division 	= [];

for($i=2; $i < $no ; $i++)
{ 	
	if($no%$i == 0)
	{	
		$no = $no/$i;
		echo $i,'*';
	}	
}

echo $no;

?>