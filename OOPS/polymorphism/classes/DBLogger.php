<?php

Class DBLogger implements Loggerinterface
{
	public  function log($message)
	{
		echo " DB Log  ".$message.'<br>';
	}
}

?>