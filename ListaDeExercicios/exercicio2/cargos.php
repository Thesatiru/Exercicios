<?php
    $cargos = $_GET ['cargos'];
    if ($cargos >=1 and  $cargos <=5)
    { 
        if ($cargos == '1') 
        {
            echo' Seu cargo é: Escrituário';
        }
        else if ($cargos == '2') 
        {
            echo 'Seu cargo é: Secretária';
        }
        else if ($cargos == '3') 
        {
            echo 'Seu cargo é: Caixa';
        }
        else if ($cargos == '4') 
        {
            echo 'Seu cargo é: Gerente';
        }
        else if ($cargos == '5') 
        {
            echo 'Seu cargo é: Diretor';
        }
    }
    else echo'Codigo invalido';

    echo"<br><a href='PaginaCargos.php'>voltar</a>";
?>