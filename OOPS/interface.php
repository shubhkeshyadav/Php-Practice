<!-- 

Interface in methlogy of software development or you can say interface in concept of object orientions in PHP. In interface must follow following things

1. You can only define functions
2. All the methods would be public by default you can not define private function in interface
3. Interface can not containt veriables
4. All method which are difined in interface must be implemented in there implemented class
5. While implementing to an interface you must use "implementes" keyword
6. A class can implements more than one interface at a time

 -->

<?php

interface TV
{	
   public function get_model();
   public function get_volume();
}

interface Special_tv
{	
	const name = 'shubhkesh';
	public function get_sleep_time();
}

Class test implements TV , Special_tv
{		

	public $model_no;
	public $volume;
	public $sleep_time;

	public function __construct($model_no,$volume,$sleep_time)
	{
		$this->model_no   = $model_no;
		$this->volume     = $volume;
		$this->sleep_time = $sleep_time;
	}

	public function get_model()
	{
		return 'Model number is - '.$this->model_no.'<br> Constact value is '.self::name.'<br>';
	}

	public function get_volume()
	{
		return 'Volume is - '.$this->volume.'<br>';
	}

	public function get_sleep_time()
	{
		return 'Sleep time  is - '.$this->sleep_time.'<br>';
	}
}

$obj = new test('LG-01UH62F','789','4 hours');


echo $obj->get_model();
echo $obj->get_volume();
echo $obj->get_sleep_time();


?>