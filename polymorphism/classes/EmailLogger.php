<?php

Class EmailLogger implements Loggerinterface
{
	public  function log($message)
	{
		echo "Email log  ".$message.'<br>';
	}
}

?>