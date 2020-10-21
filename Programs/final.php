<?php

abstract Class Ab
{
	abstract public function abf();	

	final public function ab_n()
	{
		echo "<br>abstract class normal function<br>";
	}

	public function disp()
	{
		echo "get method";
	}
}

Class N extends Ab
{
	public function abf()
	{	
		parent::disp();
		echo 'ab func';
	}


}

N::abf();
N::ab_n();

?>