<?php
	
	/**
	 * The method overriding is the concept of the oops where you can overide the method of parent 
	 * Class. The method overriding occurs when you define same method name twice (or more). 
	 */

	Class ParentClass
	{
		public function author()
		{
			return 'Function call from parent class';
		}
	}


	Class ChildClass extends ParentClass
	{
		public function author() // here we override the parent class method
		{	
			//return parent::author();
			return 'Functin called from child class';
		}
	}

	$obj = new ChildClass;

	echo $obj->author();






















































































































































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