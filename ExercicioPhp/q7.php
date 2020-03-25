<!--
    Escreva uma função que recebe, por parâmetro, o número de linhas,
    colunas e um conteúdo (texto) qualquer. Que serão utilizados para criar uma tabela
    HTML com essas caracteristicas
-->
<?php
function create_table($linhas, $colunas, $texto){
    $indexLN = 0;
    $indexCOL = 0;
    echo "<table>";
    while ($indexLN < $linhas) {
        echo "<tr>";
        while ($indexCOL < $colunas) {
            echo "<td>" . $texto . "</td>";
            $indexCOL++;
        }
        echo "</tr>";
        $indexLN++;
        $indexCOL = 0;
    }
    echo "<table>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 7</title>
</head>
<body>
    <form method="post">
        <input type="number" name="linhas" id="linhas" placeholder="Digite a quantidade de linhas" required>
        <input type="number" name="colunas" id="colunas" placeholder="Digite a quantidade de colunas" required>
        <input type="text" name="texto" id="texto" placeholder="Digite o que quiser" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['linhas']) && isset($_POST['colunas']) && isset($_POST['texto'])) {
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
        $texto = $_POST['texto'];
        create_table($linhas,$colunas,$texto);
    }
    ?>
</body>
</html>