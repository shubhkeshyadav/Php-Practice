<?php

// we can achieve overloading through magic method
// method overloading is for creating dynamic methods that are not decleared within the class

// like below not possible

// Class Test
// {
//     public function disp()
//     {
//         echo 'dist';
//     }

//     public function disp($name = '')
//     {
//         echo 'dist';
//     }
// }
// $obj  = new Test;

// $obj->disp();

Class Test
{   
    CONST VAL = 3.142;

    public function __call($mthodName,$args)
    {
        if($mthodName == 'area')
        {
            $totalParams = count($args);

            if($totalParams == 1)
            {
                return self::VAL*$args[0]*$args[0]; //pie r square
            }
            else
            {
                return $args[0]*$args[0];
            }
        }
    }
}

$obj = new Test;
$area = $obj->area(5);
$area2 = $obj->area(4,4);


echo 'area of 5 is ='.$area;
echo '<br>';
echo 'area of 4 is ='.$area2;

?>