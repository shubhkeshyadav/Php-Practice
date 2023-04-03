<?php

    ob_start();
    echo("Hello there!"); //would normally get printed to the screen/output to browser
    
    ?>
    <h1>HTML Content</h1>
    <?php
    
    $output = ob_get_clean();

    
    echo $output;
?>