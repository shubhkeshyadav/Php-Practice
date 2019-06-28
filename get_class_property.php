<?php

class Foo {
    public    $prop_public  = 1;
    protected $prop_protected_1  = 2;
   private   $prop_private  = 3;
   protected $prop_protected_2 = '14';
}

$foo = new Foo();

$reflect = new ReflectionClass($foo);
$props['PROTECTED']   = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
$props['PRIVATE']   = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);
$props['PUBLIC']   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);


echo "<pre>";
print_r($props);

?>