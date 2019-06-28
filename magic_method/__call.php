<?php

/*
	The __call magic method called when you called a function which is not defined in class then __call magic method is called. It containt two parameter 1st one function name and 2nd one arguments.
*/

Class Test
{
  public function func_1()
  {
    echo "Test::func_1 called\n";
  }

  public function __call($function_name,$args)
  {
    print_r($args);
    echo "The functin $function_name is not defined\n";
  }
}

$obj = new Test;

$obj->func_1();
$obj->disp(1,2,3); // this method is not defined so "__call()" magic method will called


?>