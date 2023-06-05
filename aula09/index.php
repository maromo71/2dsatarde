<?php
//programa modificado para uso de sessão.
//apenas para ilustrar como podemos resolver o problema
//nao foi usado a classe. Por isso nao fiz essa
//solução. Já que a aula era de classes.
session_start();

// Verifica se existe um array de produtos na sessão
if (!isset($_SESSION["produtos"])) {
    $_SESSION["produtos"] = [];
}

// Verifica se foi enviado um novo produto
if (isset($_POST["descricao"]) && isset($_POST["quantidade"])) {
    $descricao = $_POST["descricao"];
    $quantidade = $_POST["quantidade"];

    // Adiciona o novo produto ao array na sessão
    $_SESSION["produtos"][$descricao] = $quantidade;
}

$produtos = $_SESSION["produtos"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Cadastro</title>
    
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="index.php" method="post">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao">
        <p></p>
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <p></p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>

    <table>
        <thead>
            <tr>
                <td>Descrição</td>
                <td>Quantidade</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $descricao => $quantidade) {
            ?>
            <tr>
                <td><?= $descricao ?></td>
                <td><?= $quantidade ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
