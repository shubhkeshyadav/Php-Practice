<?php

$num = 5;

for($i=0;$i < $num ;$i++)
{
	for($j=$num-$i;$j > 0;$j--)
	{
		echo "&nbsp&nbsp";
	}

	echo "*";

	for($k=0;$k < $i*2;$k++)
	{
		echo "*";
	}

	echo "<br>";
}

?>