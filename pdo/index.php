<?php
include_once 'conexao.php';
$conn->exec("set names utf8");
$sql = "select * from tb_alunos";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exemplo de Dados</title>
    <h2>Banco Escola</h2>
    <table class="table">
        <thead>
            <tr>
                <th>RM</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($rows = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?=$rows['rm'] ?></td>
                <td><?=$rows['nome'] ?></td>
                <td><?=$rows['email'] ?></td>
                
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</head>
<body>
    
</body>
</html>


