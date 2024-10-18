<?php
include "database.php";

$id_aluno = $_GET ['id'];


$sql_exclui_por_id = "DELETE FROM cadastro_alunos 
    WHERE cadastro_alunos . id = '$id_aluno'";
echo "<h3>". $sql_exclui_por_id . "<h3>";


if(mysqli_query($conexao, $sql_exclui_por_id))
{
    header("location:listar_cadastro_aluno.php");
}
else
{
    echo "Erro ao excluir cadastro!";
}
