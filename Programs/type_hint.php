<?php

Interface test_I
{
	public function disp();
}

Interface test_J
{
	public function show();
}

Class test_2 implements test_I,test_J
{
	public function disp()
	{
		echo "disp called from test_2";
	}

	public function show()
	{
		echo "show called from test_2";
	}
}


function called(test_I $obj)
{
	$obj->disp();
}



$obj_test_2 = new test_2;

called($obj_test_2)


?>