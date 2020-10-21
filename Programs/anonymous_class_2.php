<?php

interface Logger
{
	public function log(string $msg);
}

Class A
{
	private $logger;

	public function set_logger(Logger $log)
	{
		$this->logger = $log;
	}

	public function get_logger():Logger
	{
		return $this->logger;
	}
}

$obj = new A;
$obj->set_logger(new Class implements Logger{
	public function log(string $msg)
	{
		echo $msg;
	}
});

$obj->get_logger()->log('hhh');

?>