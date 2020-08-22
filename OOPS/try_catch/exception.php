<?php

	function test($number)
	{	
		if($number < 10)
		{
			throw new exception('Number should be greater then 10');
		}

		return $number;
	}


	try
	{
		echo test(8);
	}
	catch(exception $e)
	{
		echo $e->getMessage();
	}


?>