<?php

/*
	 __isset() magic method is called with you check the private & protected and property which are not defined in class, is exist or not in class that time __isset() magic method is called.
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

  public function __isset($prop_name)
  { 
    if(!property_exists(get_class($this),$prop_name))
    {
      echo $prop_name." is is not exist in class so __isset() called automatically\n";
    }
    else
    {
      echo $prop_name." is private or protcted so __isset() called automatically\n";
    } 
  }

}

$obj  = new Test;


isset($obj->name); // triying to get private property
isset($obj->ip); // this property does not exist in class

?>