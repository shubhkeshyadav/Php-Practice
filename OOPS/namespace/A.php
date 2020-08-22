<?php

namespace def
{
	Class test
	{
		public function show()
		{
			echo "show method is called of def namespace<br>";
		}
	}
}

namespace
{	
	use def\test;
	Class test_2
	{
		public function show()
		{	
			echo "Show method is called of global namespace<br>";
		}
	}

	$obj = new test_2;

	$obj2 = new test;

	$obj->show();

	$obj2->show();
}


?>