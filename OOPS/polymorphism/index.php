<?php

/*
poly -> many
morphism -> many form(behaviour,ex-liquid, solid etc)

A class , veriable ,method , object etc behave with multiple type called plymorphism

*/

function __autoload($class)
{
	require_once("classes/$class.php");
}

$db_logger    = new DBLogger();
$file_logger  = new FILELogger();
$email_logger = new EmailLogger();

$user         = new User($email_logger);

$user->create_user();
$user->update_user();
$user->delete_user();


?>