<?php
	 /**
	  * "Static" keyword is used to difine the static veriable & functions.
	  * "Static" keyword make them (veriables & methods) accessable without instance of class
	  * Static veriable always store the previous & current value of veriable. If object create the it doesn't destroy it's prevos value.
	  * Static veriable can access in the class with "self" keyword instead of "this".
	  * Static function can only access static veriable.
	  * If you call non static method without creating object then this method can not contain non static veriables inside function
	  * You can call static method with scope resolution operator(::) and with class object as 	 wll
	  */

	 Class Static_test
	 {	
				static public  $name = 'shubhkesh yadav';
				public $age          = 11232;
	 	  

	 	  static public $total_object = 0;

	 	  public function __construct()
	 	  {

	 	  	//echo spl_object_hash($this->age);

	 	  	self::$total_object++;
	 	  }

	 	static public function test()
	 	{
	 		echo self::$name;
	 		echo "You are here..<br>";

	 		//echo self::$age;
	 	}

	 	public function test_2()
	 	{
	 		echo self::$name;

	 		// echo $this->name; // it willthrough error bcoz it acccessing non static propery 							and you calling without creating object of the class like 							scope resolution operator (::)

	 		echo 'non static method called';
	 	}


	 }

	 $obj = new Static_test;
	 $obj = new Static_test;
	 $obj = new Static_test;
	 $obj = new Static_test;
	 $obj = new Static_test;
	 $obj = new Static_test;

	 

	 echo "<br>";
	 

	 $obj->test();
	 $obj->test_2();

	 //Static_test::test();

	 Static_test::test_2();

	 echo '<br>Total created object are '.Static_test::$total_object;


















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