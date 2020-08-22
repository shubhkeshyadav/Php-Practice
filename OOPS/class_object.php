<?php

Class TV
{	
	public $volume = 1;
	public static $no = 0;

	function __construct()
	{
		echo 'Object Called '.$this->get_obj_count().'<br>';
	}

	private function get_obj_count()
	{
		return self::$no = self::$no+1;
	}

	public function VolumeUp()
	{
		$this->volume++;
	}
}

$obj = new TV();

print_r($obj); die;


$obj->VolumeUp();
$obj->VolumeUp();
$obj->VolumeUp();


echo $obj->volume;


?>