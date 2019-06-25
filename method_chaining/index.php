<?php

Class Test
{
	public function func_1()
	{
		echo "functin 1<br>";
		return $this;
	}

	public function func_2()
	{
		echo "functin 2<br>";
		return $this;
	}

	public function func_3()
	{
		echo "functin 3<br>";
		return $this;
	}

	public function func_4()
	{
		echo "functin 4<br>";
	}
}

$obj = new Test;

$obj->func_1()->func_2()->func_3();


?>