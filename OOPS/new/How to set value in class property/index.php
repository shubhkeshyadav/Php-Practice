<?php

	Class StudentClass
	{
		public $name;
		public $mark;
		public $passed;	

		public function setStudentDetails($name,$mark,$passed)
		{
			$this->name   = $name;
			$this->mark   = $mark;
			$this->passed = $passed;
		}
	}

	$obj_student = new StudentClass;
	
	$obj_student->setStudentDetails('Shubhkesh Yadav','98.2',true);	

	pr($obj_student->name);
	pr($obj_student->mark);
	var_dump($obj_student->passed);

	pr($obj_student);


	





















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