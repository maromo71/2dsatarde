<?php
    $professores = [
        "Sinzomar",
        "Maromo",
        "Polato",
        "Rodrigo"
    ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Tabela com Vetor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       <h1>Tabela de Professores</h1>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td>Número</td>
                    <td>Professor</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=0; $i<sizeof($professores); $i++){
                    ?>
                    <tr>
                        <td><?=$i+1?></td>
                        <td><?=$professores[$i]?></td>
                    </tr>    
                <?php } ?>
            </tbody>
        </table>
  </div>
</body>
</html>
    