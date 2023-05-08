<?php
    //faça enquanto
    $soma = 0;
    do {
        $n = readline("Digite um valor para soma, ou 0 para acabar: ");
        $soma += $n;

    } while ($n != 0);
    echo "Fim \n";
    echo "A soma terminou em $soma \n";