<?php
//for
echo ("<br> For:");
for ($i = 500; $i >= 1; $i--)
    {
        echo "<br>",$i;
    }
    echo "<br>";

$i = 500;

//While
echo ("<br> While:");
while ($i >= 1)
    {
        echo "<br>" . $i;
        $i--;
    }
    echo "<br>";

//Do{} While()
echo ("<br> Do{} While(): <br>");
$i = 500;

    do{
        echo "<br>",$i;
        $i--;
    }while ($i >= 1);
?>