<?php

    require_once "loja.php";
    $estoque = new Loja;
    if(isset($_POST["descricao"])){
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $estoque->adicionar($descricao, $quantidade);
    }
    $produtos = $estoque->itens;
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
            foreach($produtos as $key => $value) {
            ?>
            <tr>
                <td><?=$key?></td>
                <td><?=$value?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>