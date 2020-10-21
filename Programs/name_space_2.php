<?php

namespace N1;
class emp
{
	public function disp()
	{
		echo "n1 method called";
	}
}

namespace N2;

//use N1\emp;

class college
{
	public function disp()
	{
		echo "n2 method called";
	}
}


$obj1 = new \N1\emp;
$obj2 = new college;
$obj1->disp();
$obj2->disp();


?>