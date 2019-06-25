<!-- 

In traits method overrading first periority keep for traits

 -->

<?php

Class Temp
{
	public function test_1()
	{
		echo "function Test_1 trait <br>";
	}	

}

trait Test_1
{
	public function test()
	{
		echo "function Test_1 trait <br>";
	}

}

trait Test_2
{
	public function test()
	{
		echo "function Test_2 trait <br>";

		//Temp::test_1();
	}	
}

trait Test_3
{
	public function test()
	{
		echo "function Test_3 trait <br>";
	}	
}

Class Child
{	
	use Test_1, Test_2 ,Test_3{
		Test_1::test insteadof Test_2,Test_3; 
		Test_2::test as test_new;
		Test_3::test as test_new_2;
	}
}

$obj = new child;

$obj->test();
$obj->test_new();
$obj->test_new_2();
//$obj->test_new_3();

?>