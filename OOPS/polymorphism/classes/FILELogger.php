<?php

Class FILELogger implements Loggerinterface
{
	public  function log($message)
	{
		echo "File log  ".$message.'<br>';
	}
}

?>