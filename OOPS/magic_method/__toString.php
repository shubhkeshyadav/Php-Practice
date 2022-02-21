<?php

/*
  __toString() :-
    When you print a object through echo statement then __toString magic method will call
*/

Class Test
{ 
  private $name = array('aa','bb','cc','dd');
  
  protected $mob_no = 9456435743;
  
  public $address = 'A-2 sector 63 noida';

  private $age = 90;

  public function __toString()
  { 
    return "__toString method is called";
  }

}

$obj  = new Test;

echo '<pre>';
print_r($obj);

echo $obj; // here magic method will call bcoz you print a object



?>