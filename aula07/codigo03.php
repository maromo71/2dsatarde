<?php
    echo "Digite um valor: \n";
    $num = readline();

    $soma = 0;

    for ($i=1; $i <= $num / 2; $i++) { 
        if($num % $i == 0){
            $soma+= $i;
        }
    }
    $x = $soma == $num ?  "Pefeito" :  "Imperfeito";
    echo $x;