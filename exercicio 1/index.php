<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>Menu</h1>

<form method = "post" action="calcular.php">


    <h1>Insira seu nome<input type="text" name="nome" min="0" max="99"></h1>

    <br></br>

    <h1> Lanche: </h1>

    <h2>X Burger(6,00) <input type="number" name="xbu" min="0" max="99"></h2>
    <h2>X Salada(8,00) <input type="number" name="xsa" min="0" max="99"></h2>
    <h2>X Bacon(10,00) <input type="number" name="xba" min="0" max="99"></h2>
    <h2>X Tudo(12,00)  <input type="number" name="xtu" min="0" max="99"></h2>
    <h2>X Duplo(15,00) <input type="number" name="xdu" min="0" max="99"></h2>

    <br></br>

    <h1> Bebida: </h1>

    <h2>Água (R$2,00) <input type="number" name="agu" min="0" max="99"></h2>
    <h2>Suco (R$5,00) <input type="number" name="suc" min="0" max="99"></h2>
    <h2>Lata (R$3,00) <input type="number" name="lat" min="0" max="99"></h2>
    <h2>Refri 600 ml (R$5,00)  <input type="number" name="sei" min="0" max="99"></h2>
    <h2>Refri 2 Litros (R$8,00) <input type="number" name="lit" min="0" max="99"></h2>

    <input type="submit">
</form>
    
</body>
</html>