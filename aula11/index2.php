<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome Triangular</title>
</head>
<body>
    <h1>Nome Triangular</h1>
    <form action="index2.php" method="post">
        <label for="textNome">Nome</label>
        <input type="text" name="textNome" id="textNome">
        <input type="submit" value="Gerar Triangulo">
    </form>
    <?php
    //aqui a logica para desenhar o triangulo.
        if(isset($_POST["textNome"])){
            $nome = $_POST["textNome"];
            $t = strlen($nome);
            for ($i=0; $i < $t; $i++) { 
                for ($j=0; $j <= $i; $j++) { 
                    echo $nome[$j];
                }
                echo "<br>";
            }

        }    
    
    ?>
</body>
</html>