<?php
/*
- In strategy desing pattern it deside at run time how out code will work
- strategy design pattern is a type of behavioural design pattern
- Behavioral design pattern used to address how an applicatoin will run when have chunk of t
  to perform same task
- The strategy design pattern is most usefull in the situation where you have a class that may be similar but not related and different with there specific behavior
*/

interface sortAlgo
{
	public function sort(array $data);
}

Class QuickSort implements sortAlgo
{
	public static function sort(array $data)
	{
		// quick sort code here
	}
}

Class HeapSort implements sortAlgo
{
	public static function sort(array $data)
	{
		// Heap sort code here
	}
}

function sort($data)
{
	if(count($data) > 20) // here it deside at run time which sort will execute
	{
		$sortedData = QuickSort::sort($data);
	}
	else
	{
		$sortedData = HeapSort::sort($data);
	}

	return $sortedData;
}

$data = [32,4,5,6,7,8,1,3,44,55,1];

$sortedData =  sort($data);

?>