<?php
   
$r = 5;
$c = 5;

for ($i = 1; $i <= $r; $i++)
 {
    for ($j = 1; $j <= $c; $j++)     
    {
        if ($i == 1 || $i == $r || $j == 1 || $j == $c)
            echo "*";
        else
            echo "";
    }
    echo "<br>";
    
}


?>