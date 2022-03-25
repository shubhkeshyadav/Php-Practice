
<?php
/*
echo
    1. echo can output one or more strings.	
    2. echo is faster than print because it does not return any value.
    3. If you want to pass more than one parameter to echo, a parenthesis should be used.

Print
    1. print can only output one string and it always returns 1.
    2. print is slower compared to echo.
    3. Use of parenthesis is not required with the argument list.
    4. Print behave like a method and it return some response
*/

$str = 'Shubhkesh Yadav';

print $str;

print '<br>';

echo $str;

$resp = print $str;

echo '<br>';

var_dump($resp);

echo $str ? print 'yes' : print 'no'; // you can not use echo like this

?>
       