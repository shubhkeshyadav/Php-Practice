
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

 *      echo "1","2"; output 12
 *      print "1","2"; error
 *      
 *      $resp = print 'hello'; //   output
 *      $resp = echo  'hello'; //   error

        print_r($resp);    
 * 
 */

$str = 'Shubhkesh Yadav';

print $str;

print '<br>';

echo $str;

$resp = print $str;

echo '<br>';

var_dump($resp);

echo $str ? print 'yes' : print 'no'; // you can not use echo like this

echo '<br><br>########################<br>';

// echo has no return value
//$resp = echo "Hi"; // it will give error
$resp = print "Hi";
var_dump($resp); // it will return 1

echo '1','2';
//print '1','2'; // it will give error

echo true ? print 'yes' : print 'no'; 

?>
       