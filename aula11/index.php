<?php
require_once "codigo1.php";
$area = NULL;
if(isset($_POST["textLargura"]) && isset($_POST["textAltura"])){
    if($_POST["textLargura"]=="" || $_POST["textAltura"]==""){
        echo "<h1>Favor preencher corretamente</h1>";
        return;
    }
    $largura = $_POST["textLargura"];
    $altura = $_POST["textAltura"];
    $area = calcularArea($largura, $altura);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Retângulo</title>
</head>
<body>
    <h1>Retângulo</h1>
    <h2>Cálculo da Área</h2>

    <form action="index.php" method="post">
        <label for="textLargura">Largura</label>
        <input type="text" name="textLargura" id="textLargura">
        <br >
        <label for="textAltura">Altura</label>
        <input type="text" name="textAltura" id="textAltura">
        <br >
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($area != NULL){
            echo "<h3>Valor da Área: $area</h3>";
        }
    ?>
</body>
</html>