<?php
if (!isset($_SESSION))
{
    session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bem-vindo ao painel <?php echo $_SESSION['nome_aluno']; ?>
    <br>
    <a href="http://localhost/BLABLABLA/aulabanco/form_home.php">Avançar</a>
    
</body>
</html>