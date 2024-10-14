<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="css\listar.css">
</head>
<body>
    <h3>Formulario de cadastro de alunos</h3>
    <div id="meuID">Meu ID</div>
    <div class="minhaClasse">Minha classe</div>
    <form action="cadastro_aluno.php" method="post">
    <label for="nome_aluno" >Nome:</label>
    <input type="text" name="nome_aluno" id="nome_aluno">
    <label for="email_aluno">Email: </label>
    <input type="text" name="email_aluno" id="email_aluno">
    <label for="celular_aluno">Número de telefone: </label>
    <input type="text" name="celular_aluno" id="celular_aluno">
    <input type="submit" value="cadastrar">
    </form>

</body>
</html>