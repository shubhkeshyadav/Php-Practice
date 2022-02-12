<?php
	 /**
	  * The use of abstract class is , to force developer to work according to there system
	  * Abstract (Incomplete) class, if a class contain any abstract method it became abstract class
	  * We can't create object of the abstract class
	  * Abstract class can have abstract and non-abstract methods
	  * The method which defined abstract in abstract class must be use in children class
	  * 
	  */

	interface test
	{
		public function intfunction();
	}

	abstract Class EmpDetails implements test
	{	
		public $company_name = 'Company name is Sparx it solutions pvt. ltd.';
	 	public function fullname()
	 	{
	 		return 'Full name is Shubhkesh Yadav';
	 	}

	 	abstract protected function getMonthlySalary();

	 	public function intfunction()
	 	{
	 		echo 'This is interface function in abstract class';	
	 	}
	}


	 Class Fulltimeemp extends EmpDetails
	 {
	 	public function __construct()
	 	{
	 		parent::intfunction();
	 	}

	 	public function getMonthlySalary()
	 	{
	 		return 'Monthly salary Rs12000';
	 	}


	 }

	 $obj = new Fulltimeemp;

	 pr($obj->fullname());
	 pr($obj->getMonthlySalary());
	 pr($obj->company_name);



















































































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