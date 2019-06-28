<?php

/*
	The __callStatic magic method called when you called a static function which is not defined in class then __callStatic magic method is called. It containt two parameter 1st one function name and 2nd one arguments.
*/

Class Test
{
  public function func_1()
  {
    echo "func_1 is called\n";
  }

  public function __call($function_name,$paramers)
  {
    echo "$function_name is not defined\n";
  }

  public static function __callStatic($function_name,$args)
  {
    echo "static $function_name is not defined\n"; 
  }


}

$obj = new Test;

$obj->func_1();
$obj->func_sdfds2();
$obj->funsdfc_2();
$obj->func_2342();
$obj->func_2sfsdfsd34();

test::func_3();
test::func_3sdsdf();

?>