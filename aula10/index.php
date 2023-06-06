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

    $produto = new Produto($codigo, $descricao, $quantidade, $valor);
    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = [];
    }
    $_SESSION['produtos'][] = $produto;
}

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
        
            echo "<table>";
            echo "<tr><th>Código</th><th>Descrição</th><th>Quantidade em Estoque</th><th>Valor Unitário</th></tr>";
            foreach ($_SESSION['produtos'] as $produto) {
                echo "<tr><td>" . $produto->codigo . "</td><td>" . $produto->descricao . "</td><td>" . $produto->quantidade . "</td><td>" . $produto->valor . "</td></tr>";
            }
        ?>
    </body>
</html>
