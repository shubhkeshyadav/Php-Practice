<?php
	 /**
	  * Inheritance is the property inwhich you can access property of one class into another class
	  * That is called inheritance
	  */

	 Class C
	 {
	 	protected $c_name = 'hello';
	 }
	
	Class A extends C
	{
		 public $name = 'shubhkesh yadav';

		 public function c_name1()
		 {
		 	echo $this->c_name;
		 }
	}

	Class B extends A
	{
		public $age = '20 Year';

		public function p_name()
		{
			echo $this->name;
		}

		public function c_name2()
		{
			echo $this->c_name;
		}
	}

	Class D extends B
	{
		public function c_name3()
		{
			echo $this->c_name;
		}
	}

	$obj_d = new D;

	pr($obj_d->c_name1());
	pr($obj_d->c_name2());
	


	





















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