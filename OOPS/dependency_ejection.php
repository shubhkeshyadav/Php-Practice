<!-- 
	 - If you want to have a good well written application you should avoid dependencies between your modules/classes. 
	 - There is a design pattern which could help and it's called Dependency Injection (DI). It allows you to inject objects into a class, instead of creating them there.
 -->

<?php

Class Log
{	
	public function show_log($message)
	{
		echo 'Log saved for '.$message.'<br>';
	}
}

Class User
{	
	private $obj_log;

	public function __construct(Log $obj_log)
	{
		$this->obj_log = $obj_log;
	}
	public function insert_user()
	{	
		$this->obj_log->show_log('User inserted');
	}

	public function update()
	{		
		$this->obj_log->show_log('User updated');
	}
}

$obj_log  = new log;
$obj_user = new User($obj_log);

$obj_user->insert_user();
$obj_user->update();


?>