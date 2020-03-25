<!-- 
    Maria quer viajar até a casa de sua irma, de carro, e gostaria de saber, antecipadamente,
    quantos litros de gasolina irá gastar e qual o valor que terá de desembolsar pelo
    combustível gasto na viagem. Faça um script em php que receba via formulário:
        => A distância da casa de maria até a casa de sua irmã, em KM;
        => O consumo de seu carro, em KM/L;
        =>O preço da gasolina no posto onde Maria abastece;
    Em seguida, mostre para Maria o valor que a mesma gastará com combustível na 
    viagem e quantos litros o carro consumirá;
-->
<?php 
    if(isset($_POST['distancia']) && isset($_POST['consumo']) && isset($_POST['preco'])){
        $distancia = $_POST['distancia'];
        $consumo = $_POST['consumo'];
        $preco = $_POST['preco'];
        $resultado1 = ($distancia/$consumo)*$preco;
        $resultado2 = $distancia/$consumo;
        print("Valor gasto: ".$resultado1." Reais");
        print("<br>O carro consumirá: ".$resultado2. " Litros");

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 5</title>
</head>
<body>
    <form method="post">
        <input type="number" name="distancia" id="distancia" placeholder="Distancia em KM" required>
        <input type="number" name="consumo" id="consumo" placeholder="Consumo do carro em Km/l" required>
        <input type="number" name="preco" id="preco" placeholder="Valor da gasolina no posto" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>