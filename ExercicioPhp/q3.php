<!--
    Crie um script php que receba um número, a partir de um formulário e gere a tabuada 
    completa de multiplicação desse número.

-->
<?php 
if(isset($_POST['valor'])){
    $valor = $_POST['valor'];
    $multiplicadores = 0;
    //Cria tabela para organização
    echo "<table>";
        echo "<tr>";
            echo "<td>Numero</td>";
            echo "<td>Multiplicador</td>";
            echo "<td>Resultado</td>";
        echo "</tr>";
    //loop para preencher a tabela até 10.
    // pode ser alterado como entrada do usuário para definir o limite
    while ($multiplicadores <=10){
        //Calculo de resultado dentro do while para percorrimento dos valores até o limite    
        $resultado = $valor*$multiplicadores;
            echo "<tr>";
                echo "<td>".$valor." * </td>";
                echo "<td>".$multiplicadores." = </td>";
                echo "<td>".$resultado."</td>";
            echo "</tr>";
        $multiplicadores++;    
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 3</title>
</head>
<body>

    <form  method="post">
        <input type="number" name="valor" id="valor" required>
        <input type="submit" value="Ver tabuada">
    </form>
</body>
</html>