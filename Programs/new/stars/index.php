<?php
$no = '5';
echo '<table cellpadding="15" cellspacing="20" border="2">';

echo '<tr>';

    echo '<td>';
        echo '1';
        echo '<table>';
            for($i=0;$i<$no;$i++)
            {   
                echo '<tr>';
                
                for($j=0; $j<$i+1; $j++)
                {
                echo '<td>*</td>';
                }   
                echo '</tr>';
            }
        echo '</table>';
    echo '</td>';

    echo '<td>';
        echo '2';
        echo '<table>';
            for($i=0;$i<$no;$i++)
            {   
                echo '<tr>';

                for($j=$no-$i; $j>0; $j--)
                {   
                echo '<td>&nbsp</td>';

                }

                for($k=0; $j<$i+1; $j++)
                {
                    echo '<td>*</td>';
                
                }
                echo '</tr>';
            }
        echo '</table>';
    echo '</td>';

    echo '<td>';
        echo '3';
        echo '<table>';
            for($i=0;$i< $no;$i++)
            {   
                echo '<tr>';

                for($j=$no-$i;$j>0;$j--)
                {
                    echo '<td>*</td>';
                }   
                echo '</tr>';
            }
        echo '</table>';
    echo '</td>';

    echo '<td>';
        echo '4';
        echo '<table>';
            for($i = 0; $i < $no; $i++)
            {   
                echo '<tr>';
                for($j = 0; $j < $i+1; $j++)
                {
                    echo '<td>&nbsp</td>';

                }
                for($k = $no-$i; $k > 0; $k--)
                {
                    echo '<td>*</td>';

                }
                echo '</tr>';
            }
        echo '</table>';
    echo '</td>';
echo '</tr>';

echo '<tr>';
    echo '<td>';
    echo '5';
    echo '<table>';
        for($i = 0; $i < $no; $i++)
        {   
            echo '<tr>';

            for($j = $no-$i; $j > 0; $j--)
            {
                echo '<td>&nbsp</td>';
            }

            for($k = 0; $k < $i*2+1; $k++)
            {
                echo '<td>*</td>';
            }

            echo '</tr>';
        }
    echo '</table>';
    echo '</td>';

    echo '<td>';
    echo '6';
    echo "<table>";
        for($i = 0; $i < $no; $i++)
        {   
            echo "<tr>";
            for($j = 0; $j < $i+1; $j++)
            {
                echo '<td>&nbsp</td>';
            }

            $l = $no+$no-1;
            for($k = $l-$i*2; $k > 0; $k--)
            {
                echo '<td>*</td>';
            }
            echo "</tr>";   
        }
    echo "</table>";
    echo '</td>';

    echo '<td>';
    echo '7';
    echo "<table>";
        for($i = 0; $i < $no; $i++)
        {   
            echo "<tr>";
            echo '<td>*</td>';
            for($k = 0; $k  < $no; $k++)
            {   
                if($i==0 or $i == $no-1)
                {
                    echo '<td>*</td>';
                }
                else
                {
                    echo '<td>&nbsp</td>';
                }
            }
            echo '<td>*</td>';
            echo '</tr>';
        }
    echo "</table>";
    echo '</td>';

    echo '<td>';
    echo '8';
    echo "<table>";
        echo "<tr>";
        for($i = 0; $i <=$no; $i++)
        {   
            echo '<td>&nbsp</td>';
        }
        echo '<td>*</td>';
        echo "</tr>";

        for($i = 0; $i < $no; $i++)
        {   
            echo "<tr>";
            for($j = $no-$i; $j > 0; $j--)
            {
                echo '<td>&nbsp</td>';
            }   
            echo '<td>*</td>';
            for($k = 0; $k < $i*2+1; $k++)
            {   
                if($i == $no-1)
                {   
                    echo '<td>*</td>';
                }
                else
                {
                    echo '<td>&nbsp</td>';
                }
            }
            echo '<td>*</td>';

            echo "<tr>";
        }
    echo "</table>";
    echo '</td>';
echo '</tr>';

echo '<tr>';
    echo '<td>';
        echo '9';
        echo "<table>";
            for($i = 0; $i <$no; $i++)
            {   
                echo "<tr>";
                for($j = 0; $j < $i+1; $j++)
                {
                    echo '<td>&nbsp</td>';
                }
                echo '<td>*</td>';

                $l = $no+$no-1;
                for($k = $l-$i*2; $k > 0; $k--)
                {   
                    if($i == 0)
                    {
                        echo '<td>*</td>';
                    }
                    else
                    {
                        echo '<td>&nbsp</td>';
                    }
                }
                echo '<td>*</td>';
                echo "</tr>";
            }
            echo "<tr>";
            for($l = 0; $l <=$no; $l++)
            {   
                echo '<td>&nbsp</td>';
            }
            echo '<td>*</td>';
            echo "</tr>";
        echo "</table>";
    echo '</td>';

    echo '<td>';
    echo '10';
    echo "<table>";
        echo "<tr>";
            echo '<td>*</td>';
        echo "</tr>";

        for($i = 0; $i < $no; $i++)
        {   
            echo "<tr>";
                echo '<td>*</td>';
                    for($j = 0; $j < $i*2+1; $j++)
                    {   
                        if($i==$no-1)
                        {
                            echo '<td>*</td>';
                        }
                        else
                        {
                            echo '<td>&nbsp</td>';
                        }
                    }   
                echo '<td>*</td>';

            echo "</tr>";
        }
    echo "</table>";
    echo '</td>';

    echo '<td>';
    echo '11';
    echo "<table>";
        echo "<tr>";
        for($p = 0; $p <= $no+1; $p++)
        {
            echo '<td>&nbsp</td>';
        }
        echo '<td>*</td>';
        echo "<tr>";

        for($i = 0; $i < $no; $i++)
        {   
            echo "<tr>";
            for($j = $no-$i; $j > 0; $j--)
            {
                echo '<td>&nbsp</td>';
            }   
            echo '<td>*</td>';
            for($k = 0; $k < $i+1; $k++)
            {   
                if($i == $no-1)
                {
                    echo '<td>*</td>';
                }
                else
                {
                    echo '<td>&nbsp</td>';
                }
            }
            echo '<td>*</td>';
            echo "</tr>";
        }
    echo "</table>";
    echo '</td>';

    echo '<td>';
    echo '12';
    echo "<table>";
        echo "<tr>";
        echo '<td>*</td>';
        for($i = 0; $i < $no+$no+3; $i++)
        {
            echo '<td>&nbsp</td>';
        }
        echo '<td>*</td>';
        echo "<tr>";

        for($i = 0; $i < $no; $i++)
        {
            echo "<tr>";
            echo '<td>*</td>';
            for($j = 0; $j < $i+1; $j++)
            {
                echo '<td>&nbsp</td>';
            }
            echo '<td>*</td>';

            $l = $no+$no-1;
            for($k = $l-$i*2; $k > 0; $k--)
            {
                echo '<td>&nbsp</td>';
            }
            echo '<td>*</td>';
            for($m = 0; $m < $i+1; $m++)
            {
                echo '<td>&nbsp</td>';
            }
            echo '<td>*</td>';

            echo "</tr>";
        }
        echo '<td>*</td>';
        for($k = 0; $k <= $no; $k++)
        {
            echo '<td>&nbsp</td>';
        }
        echo '<td>*</td>';
        for($k = 0; $k <= $no; $k++)
        {
            echo '<td>&nbsp</td>';
        }
        echo '<td>*</td>';
    echo "</table>";
    echo '</td>';
   

echo '<tr>';

    echo '</table>';


?>