<?php
	
	/**
	 * PHP namespace are the way of encapsulating the items so that same name can be reuse use 
	 * withour any conflict.
	 * namespace create virtual folder for the program. where program encapsulate.
	 */

	namespace n1;

	function first()
	{
		echo 'first function called<br>';
	}

	namespace n2;

	function second()
	{
		echo '2nd function called';
	}

	\n1\first(); // first function called

	//second(); or
	\n2\second();
	





















































































































































	function pr($data , $exit = false) // temp functin
	{
		echo "<pre>";
			print_r($data);
		echo "</pre>";

		if($exit)
		{
			die();
		}
	}

?>