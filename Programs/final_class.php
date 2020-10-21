<?php

Class aa
{
	public function disp()
	{
		echo __CLASS__.'-disp';
	}
}

class bb extends aa
{
	public function disp()
	{
		echo __CLASS__.'-disp';
	}
}

$obj = new aa;

$obj->disp();

?>