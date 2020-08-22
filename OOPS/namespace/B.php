<?php

namespace parents;
//namespace child;

require_once 'B_inc.php';

use Child\C;

Class B
{	
	public function disp()
	{
		echo "B class disp method called<br>";
	}
}

$obj_b = new B;
$obj_b->disp();


$obj_c = new C;

$obj_c->show();

?>