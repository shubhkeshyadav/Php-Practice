<?php
$no = '5';

echo '1__________________________________________<br>';
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

echo '2__________________________________________<br>';
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
echo '3__________________________________________<br>';

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
echo '4__________________________________________<br>';

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
echo '5__________________________________________<br>';

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
echo '6__________________________________________<br>';

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
echo '7__________________________________________<br>';

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

echo '8__________________________________________<br>';
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

echo '9__________________________________________<br>';
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
echo "<table>";

echo '10__________________________________________<br>';
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

echo '11__________________________________________<br>';
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

echo '12__________________________________________<br>';
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
?>