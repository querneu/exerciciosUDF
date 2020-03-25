<!--
    Criar uma função para calcular o imposto de renda dos contribuintes, considerando que
    os dados de cada contribuinte, número de CPF, número de dependentes e renda mensal
    são valores fornecidos pelo usuário. Para cada contribuinte será feito um desconto de 
    5% do salário mínimo por dependente.
    Valores:
        Até 3 Salários => Isento
        3 salários => 7%
        4 salários => 15%
        5 salários => 22%
        acima de 6 salários => 27%
-->
<?php 
    function calcular_imposto($dependentes,$salario){
        $desconto_dependente = $salario*0.05;
        $descontado_por_dependentes = ($desconto_dependente*$dependentes);
        if($salario<=2994){
            print("Isento");
        }elseif($salario> 2995 && $salario<3992){
            print("<br>Desconto de dependentes: ".$desconto_dependente*$dependentes);
            $descontado_total = ($salario - $descontado_por_dependentes)*0.7;
            print("<br>Valor do imposto: ".$descontado_total);
        }elseif($salario>=3992 && $salario<4990){
            print("<br>Desconto de dependentes: ".$desconto_dependente*$dependentes);
            $descontado_total = ($salario - $descontado_por_dependentes)*0.15;
            print("<br>Valor do imposto: ".$descontado_total);
        }elseif($salario>=4990 && $salario<5988){
            print("<br>Desconto de dependentes: ".$desconto_dependente*$dependentes);
            $descontado_total = ($salario - $descontado_por_dependentes)*0.22;
            print("<br>Valor do imposto: ".$descontado_total);
        }else{
            print("<br>Desconto de dependentes: ".$desconto_dependente*$dependentes);
            $descontado_total = ($salario - $descontado_por_dependentes)*0.27;
            print("<br>Valor do imposto: ".$descontado_total);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 8</title>
</head>
<body>
    <form method="post">
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf">
        <input type="number" name="dependentes" id="dependentes" placeholder="Digite o número de dependentes" required>
        <input type="number" name="salario" id="salario" placeholder="Digite seu salário" required>
        <input type="submit" value="Calcular">
    </form>
    <?php 
        if(isset($_POST['dependentes'])&&isset($_POST['salario'])){
            $dependentes = $_POST['dependentes'];
            $salario = $_POST['salario'];
            calcular_imposto($dependentes,$salario);
        }
    ?>
</body>
</html>