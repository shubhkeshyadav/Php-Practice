<?php
	 /**
	  * Type hinting gives you the ability to define the type of values that can be passed for each argument of a function or method. Type hinting is optional, but when used it forces parameters to be a certain type or an error is thrown 
	  * "type hinting" is used to specify to functioins (methhods) what type of data accepted in arguments that is called type hinting
	  * 
	  */

	 Class EmpSalary
	 {
	 	public function getSalary()
	 	{
	 		return  'Total salary is Rs.100';
	 	}
	 }


	 Class  Employee
	 {	
	 	public $mobile;
	 	
	 	public function __construct(int $mobile) // forcing to accept only integer
	 	{
	 		$this->mobile = $mobile;
	 	}	

	 	public function mobile()
	 	{	
	 		return 'Given mobile number is '.$this->mobile;
	 	}

	 	public function empSalary(EmpSalary $obj_emp) // class intance type hinting
	 	{
	 		echo $obj_emp->getSalary();
	 	}
	 }

	 $emp = new Employee('1111');

	 pr($emp->mobile());

	 pr($emp->empSalary(new EmpSalary));
	 















































































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