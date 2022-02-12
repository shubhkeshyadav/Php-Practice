<?php
	 /**
	  * Inheritance is the property inwhich you can access property of one class into another class
	  * That is called inheritance
	  */

	 Class Student
	 {
	 	protected $name;
	 	protected $email;
	 	protected $mobile;

	 	public function setStudentDetail($name,$email,$mobile)
	 	{
			$this->name   = $name;
			$this->email  = $email;
			$this->mobile = $mobile;
	 	}

	 	public function getStudentDetail()
	 	{
	 		return "name = $this->name <br> email =  $this->email <br> mobile = $this->mobile";
	 	}
	 }

	 Class BCA extends Student
	 {	
	 	public $totalSubject = 4;

	 	public function totalSubject()
	 	{
	 		return "Total subject = ".$this->totalSubject;
	 	}
	 }


	$bca = new BCA;

	$bca->setStudentDetail('shubheksh','shubhkeshyadav222@gmail.com','9393939393');

	pr($bca->getStudentDetail());	
	pr($bca->totalSubject());	

	





















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