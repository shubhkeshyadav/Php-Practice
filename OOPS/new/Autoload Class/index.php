<?php
	
	/**
	 * To achieventhe autoload functionality we need to use spl_autoload_register() predefined
	 * function.This function get the name of all using classes or interfaces in current class
	 * so that you can include all the classes 
	 */

	include 'Autoload.php';

	Class Test extends ChildClass implements interface_1
	{
		public function func1()
		{
			echo "interface function is called<br>";
		}
	}


	$obj = new Test;

	$obj->func1();
	$obj->func2();




















































































































































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