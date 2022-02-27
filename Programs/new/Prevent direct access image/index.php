<?php
    $data = scandir('assets');

    unset($data[0]);
    
    unset($data[1]);

    foreach ($data as $key => $value)
    {
    	?>
    	<img src="assets/<?php echo $value;?>">
    	<?php
    }
?>