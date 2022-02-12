<?php
	 /**
	  * The interface is the methodology of oops.
	  * Interface forcing to there implemented class to use there abstract(incomplete) methods
	  * All methods which define into interface should be public by default.
	  * Interface can't contain veriables
	  * Interface can contain constants
	  * Interface method only contain abstract(incomplete) method not with there body (full method)
	  * The class which implements interface called "Concrete Class"
	  */

	 interface userdetail
	 {
	 	public function name();
	 	public function email();

	 	const name = 'test';

	 }

	 class UserCourse implements userdetail
	 {
	 	public function email()
	 	{
	 		echo 'shubhkeshyadav222@gmail.com';
	 	}

	 	public function name()
	 	{
	 		echo 'shubhkesh yadav';
	 	}		
	 }

	 $obj = new UserCourse;

	 pr($obj->email());
	 pr($obj->name());
	 pr($obj::name);
	 



















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