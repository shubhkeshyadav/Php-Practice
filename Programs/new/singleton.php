<?php

	Class Singleton
	{
		private static $obj = null;

		protected  function __construct(){

		}

		protected  function __clone(){

		}

		protected  function __wakeup(){

		}
	    
		public static function getinstance()
		{
			if(self::$obj == null)
			{
				self::$obj = new Singleton;
			}

			return self::$obj;
		}


	}

	$obj1 = Singleton::getinstance();
	$obj2 = Singleton::getinstance();

	if ($obj1 === $obj2)
	{
		echo "Singleton works, both variables contain the same instance.";
	}
	else
	{
		echo "Singleton failed, variables contain different instances.";
	}

	
?>