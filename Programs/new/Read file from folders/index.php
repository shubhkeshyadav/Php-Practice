<?php
    $data = scandir('assets');

    unset($data[0]);
    
    unset($data[1]);

    echo "<pre>";
    
    print_r($data);

    echo "<br>#########################################################################</br>Example 2<br>";

    $files = glob('assets/*');
    //$files = glob('assets/*.txt'); // for particular extension's file

    print_r($files);

    echo "<br>#########################################################################</br>Example 3<br>";
?>