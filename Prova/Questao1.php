<!--
        Faça um programa que receba 3 números. Informe qual é o maior e o
    menor dos três. Se o resultado da soma dos dois (maior e menor) for maior
    que 100 o programa deverá apresentar seu resultado multiplicando o maior
    com o menor. [IF/ELSE]
-->
<?php 
    $valor1 = @$_POST['valor1'];
    $valor2 = @$_POST['valor2'];
    $valor3 = @$_POST['valor3'];
    $soma = min($valor1,$valor2,$valor3)+max($valor1,$valor2,$valor3);
    if($soma >=100){
        echo $resultado = min($valor1,$valor2,$valor3)+max($valor1,$valor2,$valor3);
    }

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <form method="post">
        <input type="number" name="valor1" id="valor1">
        <input type="number" name="valor2" id="valor2">
        <input type="number" name="valor3" id="valor3">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>