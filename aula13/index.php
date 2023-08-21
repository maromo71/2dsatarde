<?php
    session_start(); //iniciar a sessão
    $_SESSION["nome_usuario"] = "Marcos";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logando</title>
</head>
<body>
    <a href="home.php">Acessar página home </a>
</body>
</html>