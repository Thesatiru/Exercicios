<?php
    $idade = $_GET ["idade"];
    if ($idade > 0) 
    {
        if ($idade < 16) 
        { 
            echo"Não qualificado para votar!";
        }
        else if ($idade >= 16 and $idade <= 18 or $idade > 65 ) 
        {
             echo "Habilitado para votar, porém, não obrigatorio!";
        }
        else if ($idade >= 18 and $idade <= 65 ) 
        {
            echo"Habilitado para votar, e obrigatorio!!";
        }
     } 
     else echo"Não é possivel ter essa idade";

     echo"<br><a href='paginavoto.php'>voltar</a>";

?>