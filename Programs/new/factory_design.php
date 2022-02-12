<?php
	Class Audi
	{
		public $model;	

		public function __construct($model)
		{
			$this->model = $model;
		}	

		public function getAudi()
		{
			return 'Audi model '.$this->model .' Has been created successfylly';
		}
	}

	Class Factory
	{
		public static function makeAudi($model)
		{
			return new Audi($model);
		}

		public static function makeVMW($model)
		{
			return new VMW($model);
		}
	}

	$obj = Factory::makeAudi('VLXI');
	echo $obj->getAudi();

?>