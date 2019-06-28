<?php

/*
	The __destruct method called when object of this call finished there work or when object is destroy
*/

Class Test
{
  public function __construct()
  {
    echo 'Construct called<br>';
  }

  public function __destruct()
  {
  	echo 'Destructor is called<br>';
  }

  public function work_1()
  {
  	echo "Completed work_1<br>";
  }

  public function work_2()
  {
    echo "Completed work_2<br>";
  }
}

$obj = new Test;

$obj->work_1();
$obj->work_2();

?>