<?php
    $soma = 0;
    while($soma < 100){
        echo "Entre com um valor: \n";
        $valor = readline();
        $soma += $valor;
    }
    echo "Soma dos valores entrados pelo usuário: $soma \n";