<?php

Class User
{	
	private $logger;

	public function __construct(Loggerinterface $logger)
	{
		$this->logger = $logger;
	}

	public function create_user()
	{
		
		$this->logger->log('User created');
	}

	public function update_user()
	{
		
		$this->logger->log('User updated');
	}

	public function delete_user()
	{
		
		$this->logger->log('User deleted');
	}
}

?>