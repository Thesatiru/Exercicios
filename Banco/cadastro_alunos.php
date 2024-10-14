<?php
include "database.php";
$nome_aluno = $_POST ["nome_aluno"];
$email_aluno = $_POST ["email_aluno"];
$celular_aluno = $_POST ["celular_aluno"];

$sql = "INSERT INTO cadastro_aluno (nome_aluno, email_aluno, celular_aluno) 
VALUES ( '$nome_aluno', '$email_aluno', '$celular_aluno')";

    if (mysqli_query($conexao, $sql)) 
    {
        echo "Cadastro realizado com sucesso!!";
    }
    else 
    {
        echo "Erro ao cadastrar";
    }