<?php
//for
echo ("<br> For <br>");
for ($j = 1; $j <= 20; $j++)
    {
        $metade = $j/2;
        echo "Número: $j, Metade do Número: $metade <br>";
    }
//While
echo ("<br> While <br>");
$j = 1;

while ($j <= 20)  
    {
        $metade = $j/2;
        echo "Número: $j, Metade do número: $metade <br>";
        $j++;
     }
//Do{} While()
echo ("<br> Do{} While() <br>");
$j = 1;
do {
    $metade = $j/2;
    echo"Número: $j, Metade do Número: $metade <br>";
    $j++;
    } 
    while ($j <= 20)
?>