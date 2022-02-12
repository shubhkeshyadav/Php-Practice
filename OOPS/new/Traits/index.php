<?php

/**
 * Traits are group of methods. you can use that functions in a class with the use of class object. 
 * One morething to achieve the multiple inheritance you can use "traits"
 */

include 'Mobile_include.php';
include 'trait1.php';
include 'trait2.php';
include 'trait3.php';

Class TestClass extends IncludeClassOne
{
	use trait1,trait2,trait3
	{
		trait1::disp insteadof trait2,trait3;
		trait2::disp as disp2;
		trait3::disp as disp3;
		trait3::sayhello as public;
	}

	public function hellworld()
	{
		echo '<br>I am abstract method<br>';
	}

	public function func1()
	{	
		echo $this->trait_variable;
		echo '<br>function called of '.get_class($this);
	}
}

$obj = new TestClass;

$obj->include_function();
$obj->func1();
$obj->disp();
$obj->disp2();
$obj->disp3();

$obj->sayhello();
$obj->getName();
$obj->hellworld();


?>