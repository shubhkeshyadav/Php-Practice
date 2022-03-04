<?php

Trait T
{
    public function disp()
    {
        echo 'Hi';
    }   
    abstract  public function show();
}

Class Test
{
    use T;

    public function show()
    {
        echo 'hello';
    }
}

$obj = new Test;

$obj->disp();
$obj->show();



?>