<?php
include "database.php";

$id_aluno = $_POST ['id_aluno'];
$nome_aluno = $_POST ["nome_aluno"];
$email_aluno = $_POST ["email_aluno"];
$celular_aluno = $_POST ["celular_aluno"];

$sql_update = "UPDATE cadastro_alunos SET nome_aluno = '$nome_aluno', 
email_aluno = '$email_aluno', celular_aluno = '$celular_aluno' WHERE cadastro_alunos.id = '$id_aluno'";

    if (mysqli_query($conexao, $sql_update)) 
    {
        header("location: listar_cadastro_aluno.php");
    }
    else 
    {
        echo "Erro ao cadastrar";
    }