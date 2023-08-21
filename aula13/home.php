<?php
    session_start(); //iniciar uma sessão
    $nome_usuario = $_SESSION["nome_usuario"]; //pegar o nome do usuario desta sessão
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem vindo</h1>
    <p>Usuario logado: <?=$nome_usuario?> </p>
</body>
</html>