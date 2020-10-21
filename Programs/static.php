<?php

Class Test
{
	private $name 		= 'shubhkesh yadav';
	public static $mob 	= 9456435743;

	private $age 		= 26;
	private static $pin = 242407;

	public function getName()
	{	
		echo 'Non static with object and use self<br>';
		echo $this->name.'<br>';
		echo self::$mob;
	}

	public function getMob()
	{	
		echo '<br>Non static with Scope Resolutions<br>';
		echo self::$mob;
	}

	public static function getAge()
	{
		echo "<br>Static method without scope resolution operator can not use non static veriables<br>";
		echo self::$pin;
	}

	public static function getOther()
	{
		echo "<br>Staic with scope resolution<br>";
		echo self::$pin;
	}
}

$obj = new Test;
$obj->getName();
Test::getMob();
$obj->getAge();
Test::getOther();

?>