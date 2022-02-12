<?php
	
	Class StudentClass
	{
		public $name   = 'Shubhkesh Yadav';
		public $mark   = 89;
		public $passed = true;	
	}

	$obj_student = new StudentClass;
	
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