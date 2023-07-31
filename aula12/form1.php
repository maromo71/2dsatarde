<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exemplo formulario</title>
</head>

<body>
    <h2>Agenda de Amigos</h2>
    <form action="recebe1.php" method="post">
        <label for="txtNome">Nome da pessoa: </label>
        <label for="numIdade">Idade: </label>
        <input type="text" name="txtNome" id="txtNome"><br />
        <input type="number" name="numIdade" id="numIdade"><br />
        <input type="submit" name="btnEnviar" value="Enviar">
    </form>
</body>

</html>