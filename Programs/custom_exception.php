<?php

class My_exception extends Exception
{
	public function get_err()
	{
		echo "error at line ".$this->getLine().' and file name is '.$this->getFile();
	}
}

try
{
	if(1)
	{
		throw new My_exception;
	}
}
catch(My_exception $e)
{
	echo $e->get_err();
}

?>