<?php
//for
echo ("<br> For <br>");
$N = 20;
for ($i =2; $i <= $N; $i = $i+2)
    echo "Número par: $i <br>";

//While
echo ("<br> While <br>");
$N = 20;
$i = 2;
while ($i <= $N) 
    {
        echo "Número par: $i <br>";
        $i = $i+2;
    }

//Do{} While()
echo ("<br> Do{} While() <br>");
$N = 20;
$i = 2;
do  {
    echo "Número par: $i <br>";
    $i = $i + 2;
    } 
    while ($i <= $N)
?>