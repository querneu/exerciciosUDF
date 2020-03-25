<?php
    if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $maior = max($valor1,$valor2,$valor3);
        $menor = min($valor1,$valor2,$valor3);
        print("O maior valor digitado é: ".$maior);
        echo "<br>";
        print("O menor valor digitado é: ".$menor);
    }
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 2</title>
</head>
<body>
    <form method="post">
        <input type="number" name="valor1" id="valor1" required>
        <input type="number" name="valor2" id="valor2" required>
        <input type="number" name="valor3" id="valor3" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>