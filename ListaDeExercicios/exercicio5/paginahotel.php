<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 5</h1>
    <h3>Calculo de Hóspede</h3>
    <form action="preço.php">
        <label for="">Insira o nome do cidadão</label>    
        <input type="text" name="nome">
        <br><br>
        <label for="">Selecione o tipo da diária</label>
        <select name="tipos" id="tipos">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <label for="">Diarias utilizadas</label>
        <input type="number" name="diarias" id="diarias">
        <br><BR>
        <label for="">Consumo do Hóspede</label>
        <input type="number" name="consumo" id="consumo">
        <br>

        <button type="submit">Confirmar</button>


    </form>
    
</body>
</html>