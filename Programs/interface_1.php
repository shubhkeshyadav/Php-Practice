<?php

interface A
{
	public function disp();
}

interface A2
{
	public function disp2($name);
}

Class B implements A,A2
{	
	public function disp2($name)
	{
		echo "name is $name";
	}

	public function disp()
	{
		echo "disp method is called";
	}
}

$obj = new B;

$obj->disp2("Rakesh Kumar");


?>