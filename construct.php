<?php

Class test
{
	// public function __construct()
	// {
	// 	echo "Hello<br>";
	// }

	
	public $num = 6;
	
	
	public function disp()
	{	
		 // self::$num = self::$num+1;
		 
		 // return self::$num;

		$this->num = $this->num+1;
		 
		 return $this->num;
	
	}
}

$obj = new test;

echo $obj->disp();
echo $obj->disp();
echo $obj->disp();





?>