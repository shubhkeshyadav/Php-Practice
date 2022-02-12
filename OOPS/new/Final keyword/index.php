<?php
	
	/**
	 * The final keyword used with the class and method.
	 * Final Method- The method which define with final , can not override with any other child class. 
	 * Final Class - A class declared with final can not extends in futture.
	 */

	Class ParentClass
	{
		public function author()
		{
			return 'Function call from parent class';
		}
	}


	final Class ChildClass extends ParentClass
	{
		final public function author() // here we override the parent class method
		{	
			//return parent::author();
			return 'Functin called from child class';
		}
	}

	Class SubChildClass extends ChildClass
	{	
		// if you will uncomment below code it will create error.
		// because you can not override final method of parent class
		/*public function author() 
		{

		}*/
	}

	$obj = new SubChildClass;

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