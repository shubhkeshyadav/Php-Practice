<!-- 

Static veriable initialized once in a program and retains(keep there value) its value unlike normal veriable get initialized every time in a program;

 -->

<?php

Class test
{	

	// public static $obj_count = 0;

	// public function __construct()
	// {
	// 	self::$obj_count++;
	// }

	public $test = 424234;

	public static function somemetho(){
		return 'dd';
	}

	public  function get_obj_count()
	{
		//echo "Total object created ".self::$obj_count;
		echo 'sd fsdf sd';
		//echo self::somemetho();

	}

}

$a = new test();
$b = new test();
$c = new test();

//echo $a->get_obj_count();
echo test::get_obj_count();

//test::get_obj_count();

?>