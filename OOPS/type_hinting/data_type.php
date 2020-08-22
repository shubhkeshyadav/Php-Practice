<?php

Class test
{	
	// allow only array type 
	public function disp(array $arr)
	{
		echo "<pre>";

		print_r($arr);
	}
}

$obj_test = new test;

$obj_test->disp(array(1,2,3,4,5));


?>