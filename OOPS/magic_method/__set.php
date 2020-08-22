<?php

/*
	The __set() magic method is called when you set any value to  private & protected property or the property which is not defined, the __set() magic method is called
  , it contain two parameters (property name & value) 
*/

Class Test
{ 

  private $name;
  
  private $mob_no;
  
  private $address;

  private $age;
  
  public function get_info()
  {
    print_r(get_object_vars($this));
  }

  public function __set($prop_name,$value)
  {
    $this->$prop_name = $value;
  }

}

$obj           = new Test;
$obj->name     = 'Test';
$obj->mob_no   = '9456435743';
$obj->age = 29;

$obj->address = 'sdfsdf';

echo "\n\n\n".$obj->get_info();

?>