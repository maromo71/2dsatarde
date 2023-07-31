<?php
  if ($_POST["txtNome"] == null)
    echo "Nome Vazio";
    
  echo $_POST["txtNome"];
  die();
  echo "<p></p>";
  echo $_POST["numIdade"];
  