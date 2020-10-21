<?php

Class Automobile
{	
	private $vehile;
	private $model;

	public function __construct($makeVehile,$makeModel)
	{
		$this->vehile = $makeVehile;
		$this->model = $makeModel;
	}

	public function getVehileAndModel()
	{
		return $this->vehile.','.$this->model;
	}
}

class Factory
{
	public static function createVehilce($vehicle,$model)
	{
		// create vehicle here
		return new Automobile($vehicle,$model);
	}
}

echo Factory::createVehilce('Alto','VLXI')->getVehileAndModel();

?>