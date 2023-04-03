<!-- 

	Here you can access private method of train in another class

 -->

<?php

trait test
{
	private function disp()
	{
		echo "I am private disp method in test trait";
	}

	public function show()
	{
		echo "I am public show method in test trait<br>";
	}
}

/**
 * 
 */
class Parents
{
	use test
	{
		test::disp as public disp_new; 
		test::disp as public; 
	}
}

$obj = new Parents;

echo $obj->disp();

echo "<pre>";	

echo $obj->disp_new();

?>