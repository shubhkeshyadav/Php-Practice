<?php

/*
	  - When you serialize and object then __sleep() magic method is called
    - if it exist in class, the __sleep() magic method must return an array of class property, 
    - with the help of the __sleep() magic method you can optmised or change the class property's value.  - If you save the object of the class in DB but it contain large amount of  data so you can optmised the object of class using the __sleep() magic method. 
*/

Class Test
{ 
  private $name = array('aa','bb','cc','dd');
  
  protected $mob_no = 9456435743;
  
  public $address = 'A-2 sector 63 noida';

  private $age = 90;

  public function __sleep()
  { 
    echo "sleep called\n\n";

    $this->name = 'XYZ'; // changed or optimised the value of name property of the class
    $this->age = 24; // changed or optimised the value of name property of the class

    return array('name','age');  // it must return existing property of the class else it will occure error
  }
}

$obj  = new Test;

print_r($obj);

$new = serialize($obj);

print_r(unserialize($new));


?>