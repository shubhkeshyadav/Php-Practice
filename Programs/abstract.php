<?php

Abstract Class A
{	
	private $name = 'test name';

	Abstract public  function disp();

	private function test()
	{
		
	}

	public function disp2()
	{
		echo "non abstract metho is called".$this->name;
	}
}



Class B extends A
{	
	public function disp()
	{
		echo "disp method is called";
	}
}

$obj = new B;

$obj->disp();
$obj->disp2();


?>