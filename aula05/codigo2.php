<?php
    $a = 10;
    $b = 11;
    $c = 8;
    if ($a > $b) echo " a eh maior que b";
    
    if (!($a < $b)) {
        echo "Sera que vou imprimir isto ?";
    }else{
        echo "Ou isto\n";
    }
    $x = 10;
    $y = "10";
    if($x===$y){ //sao diferentes pois nao sao do mesmo tipo
        echo "Sao iguais \n";
    }else{
        echo "Sao diferentes \n";
    }
