<?php
//for
echo ("<br> For <br>");
for ($i = 1; $i <= 1000; $i++)
    {
        echo "<br>",$i;
    }
//While
echo ("While <br>");
$i = 1;

while ($i <= 1000)
    {
        echo "<br>" . $i;
        $i++;
    }
//Do{} While()
echo ("<br> Do{} While() <br>");
$i = 1;

    do{
        echo "<br>",$i;
        $i++;
    }while ($i <= 1000);
?>