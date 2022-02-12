<?php

trait trait3
{	
	private $name = 'shubhkesh';
	public $trait_variable = '<br>I am a variable<br>';
	
	public function disp()
	{
		echo "<br>trait3 one method is called.";
	}

	private function sayhello()
	{
		echo '<br>I am a private method<br>';
	}

	public function getName()
	{
		echo '<br>Name is '.$this->name.'</br>';
	}
}

?>