<?php

session_start();

$_SESSION['name'] = 'shubhkesh';
$_SESSION['age'] = '29';

// delete session

if(isset($_SESSION['name']))
{
    unset($_SESSION['name']);
}

// delete entire session 
session_unset();

echo "<pre>";

print_r($_SESSION);

?>