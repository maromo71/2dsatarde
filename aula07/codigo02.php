<?php
    echo "Digite um valor: ";
    $valor = readline();
    for ($i=1; $i<=$valor ; $i++) {
        if($i % 2 == 0) echo "$i \n";
    }
