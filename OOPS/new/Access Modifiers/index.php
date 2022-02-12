<?php
	 /**
	  * The access modifier define the access lavels of the class property & methos.
	  * There are three types of access modifiers private , public , protected
	  * Private => the private property can be access only in the class only where it is define. 
	  * Public => property can be access anywhere in the call and outside of the class also
	  * Protected => protected property can be access in the class where they defined and in there child class only. not outside of the class
	  */

	 Class User
	 {
			public $name      = 'Shubhkesh Yadav';
			private $password = '123123';
			protected $email  = 'Test name';
	 	
	 		public function pas()
	 		{
	 			return $this->password;
	 		}
	 }
	
	Class Admin extends User
	{
		public function __construct()
		{
			echo "Name = $this->name <br> email = $this->email";
		}
	}

	$obj = new Admin;

	pr($obj->name); // you can access
	//pr($obj->password); // can't caccess
	//pr($obj->email); // can't caccess outside of the class
	

	pr($obj->pas()); // you can use private propery by using getter function





















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