<?php
Class Test
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$obj1 = new Test('Rakesh');

$obj2 = $obj1;
$obj2->name = 'Rohan';

echo "<pre>";
print_r($obj1);
print_r($obj2);

//output
/*
    Test Object
    (
        [name] => Rohan
    )
    Test Object
    (
        [name] => Rohan
    )
 */

 echo '<br>############<br>';
$obj3 = new Test('Rakesh');

$obj4 = clone $obj3;
$obj4->name = 'shubhkesh';

print_r($obj3);
print_r($obj4);

?>