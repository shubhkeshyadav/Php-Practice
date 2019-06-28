<?php

/*
	The __destructor
*/

Class Test
{
  public function __construct()
  {
    echo 'construct called here.';
  }
}

$obj = new Test;


?>