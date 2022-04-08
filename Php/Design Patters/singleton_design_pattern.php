<?php
	/*
	- Singleton is the design patterns in PHP OOPs concept that is a special kind of class that can be instantiated only once

	- Singleton will not create new object if on object already created. It will return created one.
	- 
	The major reason to use the Singleton Design Pattern is that we can use the Singleton Design Pattern object globally and unlike other normal classes, it could only contain one kind of object or one kind of instance
	
	*/

	Class DB
	{
		private static $con;
		
		private function __construct()
		{

		}

		public static function getObj()
		{	
			if(empty(self::$con)) // or (!isset(self::$con))
			{
				self::$con = new DB;

				echo 'Object created<br>';
			}
			else
			{
				echo 'Object already created';
			}

			return self::$con;
		}
	}
	DB::getObj();

	DB::getObj(); //error
?>