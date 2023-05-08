<?php
    $soma = 0;
    do{
        echo "Digite um valor ou 0 para sair \n";
        $n = readline();
        $soma += $n;
    }while($n != 0);
    echo "Valor da soma: $soma \n";