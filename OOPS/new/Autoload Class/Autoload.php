<?php

spl_autoload_register(function($class){

	$file_name = $class.'.php';

	echo $file_name.'<br>';

	if(!file_exists($file_name))
	{
		return false;
	}

	include $file_name;

});

?>