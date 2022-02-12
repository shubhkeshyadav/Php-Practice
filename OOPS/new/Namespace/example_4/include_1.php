<?php
	namespace n1;
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

	const SOMETHING = 'constant from '.__NAMESPACE__.'<BR>';

	$name = 'shubhkesh yadav from '.__NAMESPACE__.'<br>';
	
	
?>