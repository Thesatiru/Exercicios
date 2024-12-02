<?php
include "database.php";
$id_aluno = $_GET ['id'];

$sql_por_id= "SELECT * FROM cadastro_alunos 
    WHERE cadastro_alunos . id = '$id_aluno'";

$resultado_consulta_por_id = mysqli_query($conexao, $sql_por_id);

$dados_id = mysqli_fetch_assoc($resultado_consulta_por_id);




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Document</title>
</head>
<body>
    <h3>Atualizar Cadastro</h3>
    <div id="meuID"></div>
    <div class="minhaclasse"></div>
        <h3>Formulario de atualização</h3>
        <form action="atualizar_cadastro_aluno.php" method="post">
        
        <input type="hidden" name="id_aluno" value= <?php echo $dados_id['id'] ?>>

        <label for="nome_aluno">Digite o seu Nome:</label>
        <input type="text" name="nome_aluno" id="" value= <?php echo $dados_id['nome_aluno'] ?>>
        <label for="email_aluno">Digite o seu Email:</label>
        <input type="text" name="email_aluno" id=""value= <?php echo $dados_id['email_aluno'] ?>>
        <label for="celular_aluno">Número de celular:</label>
        <input type="text" name="celular_aluno" id=""value= <?php echo $dados_id['celular_aluno'] ?>>
        <input type="submit" value="Atualizar">
        <br><br>
        <a href="http://localhost/BLABLABLA/aulabanco/form_home.php">Voltar</a>
        </form>
    
</body>
</html>