<?php

    ob_start();

    echo("Hello there!"); //would normally get printed to the screen/output to browser

   // $output = ob_get_contents();
    
    ob_end_clean();

?>