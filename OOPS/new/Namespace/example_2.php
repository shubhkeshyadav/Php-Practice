<?php
	
	namespace n1;


	class Person
	{
		public function getName()
		{
			echo __NAMESPACE__.' == FUNCTIN CALLED<br>';
		}
	}

	namespace n2;

	class Person
	{
		public function getName()
		{
			echo __NAMESPACE__.' == FUNCTIN CALLED<br>';
			
		}
	}



$obj_1 = new \n1\Person;
$obj_2 = new \n2\Person;
$obj_1->getName();
$obj_2->getName();

echo "******************************<br>";

use n1\Person AS p1;
use n2\Person AS p2;

$obj_1 = new p1;
$obj_1->getName();

$obj_2 = new p2;
$obj_2->getName();
	





















































































































































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