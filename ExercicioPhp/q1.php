<!--
    Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor
    somado seja maior que 20, este deverá ser apresentado somando-se a ele mais 
    8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado 
    subtraindo-se 5. 
-->

<?php 
if(isset($_POST['valor1']) && isset($_POST['valor2'])){
        $valor2 = $_POST['valor2'];
        $valor1 = $_POST['valor1'];
        $adicao = $valor1+$valor2;
        if($adicao >20){
            $resultado = $adicao+8;
            echo "<p>".$resultado."</p>";
        }elseif($adicao<=20){
            $resultado = $adicao-5;
            echo "<p>".$resultado."</p>";
        }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 1</title>
</head>
<body>
    <form method="post">
        <input type="number" name="valor1" id="valor1" required>
        <input type="number" name="valor2" id="valor2" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

