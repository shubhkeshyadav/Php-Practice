<?php

setCookie('cName', 'Test', time() + 86400);

/** Delete a cookie */
//setCookie('cName', 'Test', time()-1);

echo isset($_COOKIE['cName']) ? $_COOKIE['cName'] : 'Cookie not set';


?>