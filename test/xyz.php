<?php

$n = array(5, 3, 7, 9, 6, 8);

for($i = 0; $i < count($n); $i++)
{
    for($j = 0; $j < count($n)-1; $j++)
    {
        if($n[$j] < $n[$j+1])
        {
            $temp = $n[$j];
            $n[$j] = $n[$j+1];
            $n[$j+1] = $temp;
        }
    }   
}

echo '<pre>';

$number = $n[1];

print_r($n);
print_r($number);

$string = "piyush has good in programming.";
$substr = "piyush";

if(strpos($string, $substr))
{
    echo "found";
}
else
{
    echo "not found";
}


/*
char vs varchar

self refercing key

timestamp vs datetime



Select emails,count(emails) AS  total from users

group by email having count(emails) > 1


Student

$cureent  = time() - 7 days;

select * from user where create_at > $currenttime;

count()
sum();
avg();

$sql = "slele count(*)";

reverse routing

garvage collection

php artisan clear:cache;


split

explode implode

type of errors

oops concept

trait AA
{
	public function method1()
}

Class A
{
	use AA;
}

$string = "piyush has good in programming.";
$substr = "piyush";
if(strpos($string, $substr))
{
echo "found";
}
else
{
echo "not found";
}

//////////////////////////////
$n = array(5, 3, 7, 9, 6, 8);
echo array_search(7, $n);


$n = array(5, 3, 7, 9, 6, 8);

*/


?>