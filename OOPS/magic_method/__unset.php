<?php

/*
	 __unset() magic method is called when you unset the private & protected or the property which are not exist in class, that time __unset() magic method is called.
*/

Class Test
{ 
  private $name;
  
  protected $mob_no;
  
  public $address;

  private $age;


  public function __unset($prop_name)
  { 
    if(!property_exists(get_class($this),$prop_name))
    {
      echo $prop_name." is is not exist in class so __unset() called automatically\n";
    }
    else
    {
      echo $prop_name." is private or protcted so __unset() called automatically\n";
    } 
  }
}

$obj  = new Test;
  
unset($obj->name); // triying to unset private property

unset($obj->ip); // this property does not exist in class

?>