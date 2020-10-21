<?php

	namespace College
	{
		class Emp1
		{	
			public function name()
			{
				echo __CLASS__."name is shubhkesh<br>";
				return $this;

			}

			public function mobile()
			{
				echo __CLASS__."mobile no is 38948293<br>";
				return $this;

			}
		}
	}

	namespace Org
	{	
		use College\Emp1 as test;

		class Emp2
		{	
			public function name()
			{
				echo __CLASS__." name is shubhkesh<br>";
				return $this;
			}

			public function mobile()
			{
				echo __CLASS__." mobile no is 38948293<br>";
				return $this;
			}
		}

		$obj = new test;
		$obj->name()->mobile();
	}

	


?>