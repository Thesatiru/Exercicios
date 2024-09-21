<?php
    $nome = $_GET ['nome'];
    $tipos = $_GET ['tipos'];
    $diarias = $_GET ['diarias'];
    $consumo = $_GET ['consumo'];
    echo ("Nome do hóspede: " . $nome . "<br>");
    if ($tipos == "A")
    {
            $tipos = 150;
    }
        elseif ($tipos == "B")
    {
            $tipos = 100;
    }
        elseif ($tipos == "C")
    {
            $tipos = 75;
    }
        elseif ($tipos == "D")
    {
            $tipos = 50;
    }
    echo ("Valor unitario da diária: R$" . $tipos . "<br>");
    $diariatotal = $tipos * $diarias;
        echo ("Valor total da diária: R$" . $diariatotal . "<br>");
        echo ("Consumo do hóspede: R$" . $consumo . "<br>");
    $subtotal = $consumo + $diariatotal;
        echo ("Subtotal: R$" . $subtotal . "<br>");
    $tserviço =  ($subtotal * 10) / 100;
        echo ("Taxa de serviço: R$" . $tserviço . "<br>");
    $total = $tserviço + $subtotal;
        echo ("Total gasto: R$" . $total);

        echo"<br><a href='paginahotel.php'>voltar</a>";








?>