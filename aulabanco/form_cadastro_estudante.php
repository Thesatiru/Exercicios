<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Document</title>
</head>
<body>
    <h3>Formulario de Cadastro dos Alunos</h3>
    <div id="meuID"></div>
    <div class="minhaclasse"></div>
        <form action="cadastro_alunos.php" method="post">
        <label for="nome_aluno">Digite o seu Nome:</label>
        <input type="text" name="nome_aluno" id="nome_aluno">
        <label for="email_aluno">Digite o seu Email:</label>
        <input type="text" name="email_aluno" id="email_aluno">
        <label for="senha_aluno">Digite sua senha:</label>
        <input type="text" name="senha_aluno" id="senha_aluno">
        <label for="celular_aluno">Informe o seu número de celular:</label>
        <input type="text" name="celular_aluno" id="celular_aluno">
        <input type="submit" value="Cadastrar">
        <br><br>
        <a href="http://localhost/BLABLABLA/aulabanco/form_home.php">Voltar</a>
        </form>
    
</body>
</html>