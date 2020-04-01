<!--
    Faça um programa que receba dois números. Um será o valor inicial e o
outro será o final. Utilizando a função range() do php mostre a lista destes
números (inicial até o final) através de um foreach.
 -->
<!DOCTYPE html>
<html>

<head>
    <title>Questão 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <form metod="get" name="form">
        <input type="number" id="numero1" name="numero1" required placeholder="valor 1">
        <br><br>
        <input type="number" id="numero2" name="numero2" required placeholder="valor 2">
        <br><br>

        <button type="submit">Verificar</button>
    </form>
    <h3>questao 3 referente a ficha.</h3>
</body>

</html>

<?php

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $valor1 = $_GET['numero1'];
    $valor2 = $_GET['numero2'];

    foreach (range($valor1, $valor2) as $number) {
        echo " " . $number++;
    }
}

?>