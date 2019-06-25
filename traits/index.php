<?php

include 'test_inc.php';

trait Special_tv
{	
	private $sleep_time;

	public function __construct($s)
	{
		$this->sleep_time = $s;
	}

	public function get_sleep_time()
	{
		return $this->sleep_time;
	}
}

trait Normal_tv
{	
	private static $model_no = 'LG';

	public static function model_no()
	{
		return self::$model_no;
	}

	private function test1()
	{
		echo "You are here..<br>";
	}

	public function display()
	{
		$ojb_another_class= new Another_class;

		$ojb_another_class->another_class_func();
	}
}

class TV
{
	use Special_tv,Normal_tv;

	public function tv_function()
	{
		echo "I am in tv function <br>";
	}
}

$obj_new = new TV('5 hours');



echo $obj_new->get_sleep_time();


echo "<br>";

echo TV::model_no();

$obj_new->display();

	
//print_r($obj_new);die;	
