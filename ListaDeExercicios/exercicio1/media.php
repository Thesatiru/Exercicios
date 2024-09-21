<?php
$media = $_GET['media'];

    if ($media >= 0 and $media <= 10) 
    {
        if ($media <= 5) 
        {
            echo "Reprovado";
        } 
         else
                {
                    if ($media >= 5)   
                    {
                    echo "Aprovado!!";
                    }
                } 
    }
    else
    {  
        echo "Media Invalida!";

    }
    echo"<br><a href='pagina.php'>voltar</a>";
