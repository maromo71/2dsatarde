<?php
  if ($_POST["txtNome"] == null || $_POST["numIdade"] == null){
    //campos não preenchidos
    echo "Existem campos não preenchidos<br>";
    echo "<a href='form1.php'>Voltar</a>";
    return;
  }

  //variáveis para receber, agora que foram tratados
  $nome = $_POST["txtNome"];
  $idade = $_POST["numIdade"];
  
  //Mostrando uma saída formatada com as duas variáveis
  echo "<h2>A pessoa $nome possui $idade anos de idade</h2>";
  