<?php
    function ehPrimo($num){
     if($num<=1) return false;
     for($i=2; $i<=$num/2; $i++){
        if($num % $i ==0) return false;
     }
     return true;   
    }
    //somar os tres primeiros primos entrados pelo usuario
    $cont_primo = 0;
    $soma_primo = 0;
    do {
        $n = readline("Digite um numero maior ou igual a 2: \n");
        if(ehPrimo($n)==1){
            $cont_primo++;
            $soma_primo += $n;
        }
    } while ($cont_primo < 3);
    echo "Soma dos tres primeiros primos = $soma_primo \n";
