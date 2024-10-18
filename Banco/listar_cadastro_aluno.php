
<?php
 include "database.php";
$sql_listar = "SELECT * FROM cadastro_aluno";
$resultado = mysqli_query($conexao,$sql_listar);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\listar.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
</head>
<body>
    <a href="http://localhost/AULAS/aulabanco/form_home.php">Voltar</a>
    <table>
        <thead>
            <th>Nome:</th>
            <th>Email:</th>
            <th>Celular:</th>
        </thead>
        <tbody>
                <?php 
                while ($dados = mysqli_fetch_assoc($resultado)):
                ?>
            <tr>
                <td><?php echo $dados ['nome_aluno']; ?></td>
                <td><?php echo $dados ['email_aluno']; ?></td>
                <td><?php echo $dados ['celular_aluno'];?></td>
                    <?php endwhile; ?>
            </tr>
        </tbody>
    </table>
    
</body>
</html>