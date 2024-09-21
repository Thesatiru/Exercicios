<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 4</h1>
    <h3>CALCULADORA</h3>
    <form action="conta.php">
    <label for="">Digite o primeiro número: </label>
    <input type="number" name="numero" id="numero">
    <br><br>
    <label for="">Informe a opereção:</label>
    <select name="operacao" id="operacao">
        <option value="soma">Soma</option>
        <option value="subtração">Subtração</option>
        <option value="divisão">Divisão</option>
        <option value="multiplicação">Multiplicação</option>
    </select>
    <br><br>
    <label for="">Digite o segundo número:</label>
    <input type="number" name="numerodois" id="numerodois">
    <br><br>
    <button type="submit">Confirmar</button>
    

    </form>
    
</body>
</html>