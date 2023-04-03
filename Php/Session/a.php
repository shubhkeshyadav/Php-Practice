<?php

session_start();

$d = ["name"=>"shubhkesh","age"=>29,"email"=>"rakesh@gmail.com"];

$_SESSION['name'] = $d;

echo '<pre>';

print_r($_SESSION);

?>