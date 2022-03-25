<?php

spl_autoload_register(function($file_name){

	$file_name = $file_name.'.php';

	echo $file_name.'<br>';

	if(!file_exists($file_name))
	{
		return false;
	}

	include $file_name;

});

?>