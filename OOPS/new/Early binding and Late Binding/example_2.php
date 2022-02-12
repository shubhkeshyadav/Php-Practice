<?php
	
	Class A
	{
		public static function who()
		{
			echo 'Class name is '.__CLASS__."<br>";
		}

		public static function test()
		{
			//self::who();
			static::who(); // this function will copy into B , but the scope would be in A and call with B class would be success
		}
	}


	Class B extends A
	{
		public static function who()
		{
			echo 'Class name is '.__CLASS__."<br>";	
		}
	}

	Class C extends B
	{
		public static function who()
		{
			echo 'Class name is '.__CLASS__."<br>";	
		}
	}

	echo B::test();
	echo C::test();




















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