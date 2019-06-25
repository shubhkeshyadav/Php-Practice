<?php

namespace N123;

function disp()
{
	echo __NAMESPACE__." disp functin";
}


namespace N456;

use N123;

function show()
{
	echo "show function ";
}

N123\disp();

?>