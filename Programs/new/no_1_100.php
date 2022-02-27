<?php
    $no = 100;
    echo '<table cellspacing="3" cellpadding="5" border="2">';
    for($i=1;$i<=10;$i++)
    {   
        echo '<tr>';

        echo '<td>'.$i.'</td>';
        
        $k = 10;
        for($j=1;$j < $no;$j++)
        {   
            $nn = $i+$k;

            if($nn > $no)
            {   
                continue;
            }

            echo '<td>'.$nn.'</td>';


            $k = $k+10;
        }

        echo '<tr>';

    }
    echo '</table>';

?>