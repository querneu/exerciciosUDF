<!--
    Calcular a quantidade de dinheiro gasta por um fumante. Dados: o número de anos que
    ele fuma, o nº de cigarros fumados por dia e o preço de uma carteira.
-->
<?php 
if(isset($_POST['anos'])&&isset($_POST['cigarros'])&&isset($_POST['preco'])){
    $anos = $_POST['anos'];//anos fumados
    $cigarros = $_POST['cigarros'];//quantidade de cigarros por dia
    $preco = $_POST['preco'];//vallor do maço em reais
    $tempo_total = $anos*365;//Dias fumados
    $maco = 20;//Quantidade de cigarros por maço
    $total_gasto = (($maco/$cigarros)*$preco)*$tempo_total;
    print("Total gasto com cigaddos: ".$total_gasto." Reais");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 6</title>
</head>
<body>
    <form method="post">
        <input type="number" name="anos" id="anos" placeholder="Há quantos anos você fuma?" required>
        <input type="number" name="cigarros" id="cigarros" placeholder="Quantos cigarros em média por dia?" required>
        <input type="number" name="preco" id="preco" placeholder="Qual o preco da carteira" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>