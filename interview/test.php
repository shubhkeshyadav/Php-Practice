<?php
class Parent1 {

    function print(){
        echo 'Parent Class';
    }
 
    function bar(){
        $this->print(); 
		self::print();
    }
}
 
class Child extends Parent1 {
    function print() {
        echo 'Child Class';
    }
}
 
$parent = new Child();
$parent->bar(); 
?>