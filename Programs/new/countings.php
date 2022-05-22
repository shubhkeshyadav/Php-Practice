<?php
/*
1 6 11
2 7 12 
3 8 13
4 9 14 
5 10 15
*/

$row = 5;
$col = 3;
$no = $row*$col;

for($i=1;$i<=$row;$i++)
{
  $k = 0;
  for($j=1;$j<=$col;$j++)
  {
      $nn = $i+$k;
      echo $nn,' ';
  
    $k = $k+$row;
  } 
  echo "\n";
}

	
?>