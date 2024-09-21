<?php
    $numero = $_GET ['numero'];
    $numerodois = $_GET  ['numerodois'];
    $operacao = $_GET  ['operacao'];
    if ($operacao == "soma")
    {
        echo "O resultado é: " . $numero + $numerodois;
    }
    if ($operacao == "subtração")
    {
        echo "O resultado é: " . $numero - $numerodois;
    }
    if ($operacao == "divisão")
    {
        echo "O resultado é: " . $numero / $numerodois;
    }
    if ($operacao == "multiplicação")
    {
        echo "O resultado é: " . $numero * $numerodois;
    }
    echo"<br><a href='calculadora.php'>voltar</a>";

?>