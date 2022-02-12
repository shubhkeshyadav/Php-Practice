<?php
	namespace n1
	{
		class Person
		{
			public function getName()
			{
				echo __NAMESPACE__.' == FUNCTIN CALLED<br>';
			}
		}

		function disp()
		{
			echo 'fuction caled from '.__NAMESPACE__.' namespace<br>';
		}
	}

	namespace n2
	{	
		use n1 as first;
		function disp()
		{
			echo 'fuction caled from '.__NAMESPACE__.' namespace<br>';
		}

		class Person
		{
			public function getName()
			{
				echo __NAMESPACE__.' == FUNCTIN CALLED<br>';
				
			}
		}

		first\disp();

		$obj_n1 = new first\person;

		$obj_n1->getName();

		\n1\disp();
		\n2\disp();	
	}
?>