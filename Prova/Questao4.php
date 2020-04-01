<!-- 
    Elabore um programa, que calcule o que deve ser pago por um produto
considerando
o preço normal de etiqueta e a escolha da condição de pagamento.
Utilize os códigos da tabela a seguir para ler qual a condição de pagamento
escolhida e efetuar o cálculo adequado. [ Utilize o comando Switch]
Cod 1 - A vista em dinheiro, recebe 10% de desconto;
Cod 2 - à vista no cartão, recebe 5%;
Cod 3 - Em 2 vezes, preço normal;
Cod 4 - Em 3 vezes, preço normal mais 10% de juros.
-->
<?php
if (isset($_GET['etiqueta']) && isset($_GET['escolha'])) {
    $etiqueta = $_GET['etiqueta'];
    $escolha = $_GET['escolha'];

    switch ($escolha) {
        case 1:
            $desc = $etiqueta * (10 / 100);
            $etiqueta = $etiqueta - $desc;
            echo "<br>";
            echo "o preço é: " . $etiqueta . " reais (10% de desconto)<br><br>";
            break;
        case 2:
            $desc = $etiqueta * (5 / 100);
            $etiqueta = $etiqueta - $desc;
            echo "<br>";
            echo "o preço é: " . $etiqueta . " reais (5% de desconto)<br><br>";
            break;
        case 3:
            echo "<br>";
            echo "o preço é: " . $etiqueta . " reais. não há desconto.<br><br>";
            break;
        case 4:
            $desc = $etiqueta * (10 / 100);
            $etiqueta = $etiqueta + $desc;
            echo "<br>";
            echo "o preço é: " . $etiqueta . " reais (10% de juros)<br><br>";
            break;
    }
    echo "deseja realizar o pagamento? <br>";
    echo "<button type='button'>SIM</button>";
    echo "<button type='button'>NÃO</button>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>

<body>
    <form method="get">
        <label for="etiqueta">Preço da etiqueta: <br></label>
        <input type="number" name="etiqueta" id="etiqueta">
        <label for="pagamento"><br><br>Pagamento: "1" À vista;
            "2" Cartao à vista; "3" 2x no cartao; "4" 3x no cartao;<br>
        </label>
        <input type="number" name="escolha" id="escolha">
        <input type="submit" value="submit">
    </form>
</body>

</html>