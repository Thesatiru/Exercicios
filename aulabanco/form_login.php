<?php
ob_start();
include "database.php";

if (isset($_POST['email_aluno']) || isset($_POST['senha_aluno'])) 
{
    if (strlen($_POST['email_aluno']) == 0) 
    {
        echo "Preencha o campo 'e-mail'";
    }
    elseif (strlen($_POST['senha_aluno']) == 0) 
    {
        echo "Preencha o campo 'senha'";
    }
    else 
    {
        $email_aluno = $conexao->real_escape_string($_POST['email_aluno']);
        $senha_aluno = $conexao->real_escape_string($_POST['senha_aluno']);

        $sql_login = "SELECT email_aluno, celular_aluno FROM cadastro_alunos WHERE email_aluno = '$email_aluno' AND senha_aluno = '$senha_aluno'";
        $sql_query = $conexao->query($sql_login) or die("Falha na execução do código: " . $conexao->error);
        
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) 
        {
            $usuario = $sql_query->fetch_assoc();
            if (!isset($_SESSION)) 
                session_start();
                $_SESSION['id'] = $usuario['id']; 
                $_SESSION['nome_aluno'] = $usuario['nome_aluno']; 
                header("Location:http://localhost/BLABLABLA/aulabanco/bem_vindo.php");
                exit(); 
        }   else {
            header("location:http://localhost/BLABLABLA/aulabanco/erro.php");
            exit();
        }
    }
}
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<h3>Já tem uma conta? Coloque as informaçoes a baixo!</h3>
<body>
    <form action="" method="POST">
        <p>
        <label for="text">Email:</label>
        <input type="text" name="email_aluno" id="nome_aluno">
        </p>
        <label for="text">Senha:</label>
        <input type="password" name="senha_aluno" id="senha_aluno">
        <button type="submit" name="entrar">Entrar</button> 
    </form>
    
</body>
</html>