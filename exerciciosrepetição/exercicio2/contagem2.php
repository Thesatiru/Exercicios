<?php
//For
echo ("<br> For");
for ($i = 5; $i <= 200; $i++)
    {
        echo "<br>",$i;
    }
    echo "<br>";
//While
echo ("<br> While");
$i = 5;

while ($i <= 200)
    {
        echo "<br>" . $i;
        $i++;
    }
    echo "<br>";
//Do{} While()
echo ("<br> Do{} While()");
$i = 5;

    do{
        echo "<br>",$i;
        $i++;
    }while ($i <= 200);
?>