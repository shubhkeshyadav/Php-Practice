<!-- 

ensapsulate or wrapping data into single uint called encapsulation to acheive this we use getter & setter

 -->

<?php

Class TV
{	
	public $model_no;
	public $volume;

	function __construct($model_no,$volume)
	{	
		$this->model_no = $model_no;
		$this->volume = $volume;
	}

	public function volue_up()
	{
		$this->volume++;
	}

	public function volue_down()
	{
		$this->volume--;
	}

	protected function get_model_no()
	{
		return $this->model_no;
	}

	public function get_volume()
	{
		return $this->volume;
	}
}


Class Special_tv extends TV
{
	public $sleep_time;

	public $model_no;

	public function __construct($sleep_time,$model_no,$volume)
	{	
		parent::__construct($model_no,$volume);
		$this->sleep_time = $sleep_time;
		$this->model_no   = 'TEST MODEL';

	}

	public function get_sleep_time()
	{
		return $this->sleep_time;
	}

	public function get_model_no()
	{
		return $this->model_no;
	}
}



$obj_a_tv = new Special_tv("2 Hours","LG","25");



echo $obj_a_tv->get_sleep_time();

echo '<br>';

echo $obj_a_tv->get_model_no();

echo '<br>';

$obj_a_tv->volue_up();
echo $obj_a_tv->get_volume();







?>