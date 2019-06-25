<!-- 

In traits method overrading first periority keep for traits

 -->

<?php

Class Parents
{
	public function test()
	{
		echo "Parents class function <br>";
	}
}

trait Test
{
	public function test()
	{
		echo "trait class function <br>";
	}	
}

Class Child extends Parents
{	
	use Test;
}

$obj = new child;

$obj->test();

?>