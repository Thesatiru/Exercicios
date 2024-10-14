<?PHP
//FOR
echo ("<br> For <br>");
$N= 10; 
for ($j = 1; $j <= $N; $j++)   
    {
        $quad = $j *$j; echo "Número: $j Ao quadrado $quad <br>";
    }
//While    
echo ("<br> While <br>");

$N = 10;
$j = 1;

while ($j <= $N)
    {    
        $quad = $j * $j; 
        echo "Número: $j     Ao quadrado: $quad <br>";
        $j++;
    }
//Do {} While()
echo ("<br> Do{} While() <br>");
$N = 10;
$j = 1;
do  {
    $quad = $j * $j;
    echo "Número: $j  Ao quadrado $quad <br>";
    $j++;
    }
    while ($j <= $N)
?>
