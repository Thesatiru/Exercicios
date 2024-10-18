<?php
if (!isset($_SESSION)) 
{
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\home.css">
    <title>Home</title>
</head>
<h3 class="cabeçalho">Menu</h3>
<body>
    <div class="cadastros">
    <a href="http://localhost/AULAS/aulabanco/form_cadastro_estudante.php">
    <button type="submit" value="Cadastrados" >Cadastro</button>
    </div>
    <br>
    <div class="cadastrados">
    <a href="http://localhost/AULAS/aulabanco/listar_cadastro_aluno.php">
        <button type="submit" value="Cadastrados" >Cadastrados</button>

    </div>
</body>
</html>