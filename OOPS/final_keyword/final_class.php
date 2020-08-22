<?php

/*
	1 - Final keyword is used with "Class & Method" 

	2 - Use Final keyword with class to prevent the inheritance that class

	3 - Use Final keyword with funcation to prevent override that method 

	4 - There is no use of final methods in class when class is itself declared as final because inheritance is not possible
*/

Class Parents
{
	final public function disp()
	{
		echo "Parents::disp() method is called";
	}
}

Class Child extends Parents
{
	public function disp_2()
	{
		echo "Child::disp_2() method is called";
	}
}



$obj = new Child;

$obj->disp();

?>