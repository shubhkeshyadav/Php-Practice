<?php
	interface Log
	{
		public function log($msg);
	}

	Class DBLog implements Log
	{
		public function log($msg)
		{
			echo "Log stored in DB with msg ".$msg;
		}
	}
	
	Class EmaiLog implements Log
	{
		public function log($msg)
		{
			echo "Log stored in DB with msg ".$msg;
		}
	}


	Class User 
	{
		public $objLog;

		public function __construct(Log $obj)
		{
			$this->objLog = $obj;
		}

		public function create()
		{
			$this->objLog->log('User Created successfully<br>');
		}

		public function update()
		{
			$this->objLog->log('User Updated successfully<br>');
		}
	}

	$obj = new User(new DBLog);
	$obj->create();
	$obj->update();

	$obj1 = new User(new EmaiLog);
	$obj1->create();
	$obj1->update();
?>