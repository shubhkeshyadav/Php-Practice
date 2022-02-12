<?php
	
	/*=============================================
	= The early binding which binds the veriable during the compile time. called earyly binding
	= Binding during run time (means after compile) called late binding.
	=                    
	=============================================*/
	
	
	
	
	
	
	Class Book
	{
		public $name = 'shubhkesh';

		public function author()
		{
			return 'The author name is'.$this->name;
		}

		public function getAuhor()
		{
			return $this->author();
		}
	}


	Class NewBook extends Book
	{
		public function author()
		{
			return "The author name is ".$this->name." and Raghav";
		}
	}

	$newbook = new NewBook;

	echo $newbook->getAuhor();

	/*
		
		// run above and below program and find the difference


		Class Book
		{
			public static $name = 'shubhkesh';

			public static function author()
			{
				return 'The author name is '.self::$name;
			}

			public static function getAuhor()
			{
				return self::author();
			}
		}


		Class NewBook extends Book
		{
			public static function author()
			{
				return "The author name is ".self::$name." and Raghav";
			}
		}
		echo NewBook::getAuhor();

	*/





















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