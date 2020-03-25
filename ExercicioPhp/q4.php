<!--
    Crie um script em php que receba pela URL do navegador, 3 valores numéricos e os
    armazene nas variáveis $a,$b,$c, Em seguida, calcule e escreva o valor da expressão
    ($a-$b)*$c;
-->
<?php
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $resultado = ($a-$b)*$c;
        print("Resultado: ".$resultado."<br>");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 4</title>
</head>
<body>
    Digite na url: "?a=*seu numero*&b=*seu numero*&c=*seu numero"
    Ou preencha o formulário abaixo
    <form action="" method="get">
        <input type="number" name="a" id="valor1" required>
        <input type="number" name="b" id="valor2" required>
        <input type="number" name="c" id="valor3" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
