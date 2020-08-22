<!-- 

In inheritance we inherite the propery of one class (member methods & member veriables) into another class

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

	public function get_model_no()
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

	function __construct($sleep_time,$model_no,$volume)
	{	
		parent::__construct($model_no,$volume);
		$this->sleep_time = $sleep_time;
	}

	function get_sleep_time()
	{
		return $this->sleep_time;
	}
}

Class AndroidTV extends Special_tv
{	
	public $batter_cap;

	public function __construct($batter_cap,$sleep_time,$model_no,$volume)
	{	
		parent::__construct($sleep_time,$model_no,$volume);
		$this->batter_cap = $batter_cap;
	}

	public function get_bettry_cap()
	{
		return $this->batter_cap;
	}
}


$obj_a_tv = new AndroidTV("28000 MAH ","2 Hours","LG","25");

echo $obj_a_tv->get_bettry_cap();

echo '<br>';

echo $obj_a_tv->get_sleep_time();

echo '<br>';

echo $obj_a_tv->get_model_no();

echo '<br>';

$obj_a_tv->volue_up();
echo $obj_a_tv->get_volume();






?>