<?php

/*
	The __get() magic method is called when you access private propery or the propery which is not defined, the the __get() magic method is called
  , it contain one parameters (property name)
*/

Class Test
{ 

  private $name   = 'Test user name';
  private $mob_no = '1212121212';
  public $address = 'A-2 sector 63';


  public function __get($property)
  {
    if(isset($this->$property))
    {
      return $this->$property;
    }

    return "<b>$property</b> property is not defined\n";

  }


}

$obj = new Test;

echo $obj->IPADDRESS;

?>