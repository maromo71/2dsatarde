<?php
require_once 'produto.php';
session_start();
if (!isset($_SESSION["produtos"])) {
    $_SESSION["produtos"] = [];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $produto[] = new Produto($codigo, $descricao, $quantidade, $valor);
    $_SESSION["produtos"] = $produto;
}
$produtos = $_SESSION["produtos"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulário de Produto</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="codigo">Código:</label><br>
            <input type="text" id="codigo" name="codigo"><br>
            <label for="descricao">Descrição:</label><br>
            <input type="text" id="descricao" name="descricao"><br>
            <label for="quantidade">Quantidade em Estoque:</label><br>
            <input type="number" id="quantidade" name="quantidade"><br>
            <label for="valor">Valor Unitário:</label><br>
            <input type="text" id="valor" name="valor"><br>
            <input type="submit" value="Enviar">
        </form>

        <?php
        if ($produtos !== null) {
            echo "<table>";
            echo "<tr><th>Código</th><th>Descrição</th><th>Quantidade em Estoque</th><th>Valor Unitário</th></tr>";
            
                print_r($produtos);
             
           
            
        }
        ?>
    </body>
</html>
