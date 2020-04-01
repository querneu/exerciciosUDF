<!-- 
    Faça um programa que receba dois números, o primeiro será o número a
calcular e o segundo será o final da tabuada, neste caso haverá também um
operador que o usuário informará para mostrar o resultado. [FOR]



-->

<?php

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    for ($a = 0; $a <= $numero2; $a++) {

        $resultado = $a * $numero1;
        echo "    $numero1 x $a =   ";
        echo " $resultado";
        echo "<br>";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 2</title>
</head>

<body>
    <form method="post">
        <input type="number" name="numero1" placeholder="valor 1">
        <input type="number" name="numero2" placeholder="valor 2">
        <button type="submit">Enviar!</button>
    </form>
    <h3>questao 2 referente a ficha.</h3>
</body>


</html>