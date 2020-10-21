<?php

Class aa
{	
	private $phone = 23423432;



	public function __call($method_name,$params) // if called method not defined
	{
		echo "$method_name and is not defined in ".__CLASS__.'<br>';

		if($params)
			print_r($params);
	}

	public static function __callStatic($method,$params) // if called static method not defined
	{
		echo "static $method not defined in this class<br>";
		if($params)
			print_r($params);
	}

	// if you get undefined property in class this method is called
	public function __get($prop_name) 
	{
		echo "'".$prop_name."' property is not defined";
	}

	// called when if you set a value in undefined property in class
	public function __set($prop_name,$value)
	{
		echo "$prop_name property is not defined so you can't set $value to this property<br>";
	}

	public function __isset($prop_name)
	{
		echo "$prop_name property is not defined so you can't set $value to this property<br>";
		
	}
}


$obj = new aa;

//$obj->disp();

//aa::new('new_1','new_2');

$obj->temp();

//$obj->name = 'Rakesh';

?>