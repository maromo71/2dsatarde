<?php
    function potencia($base, $expoente){
        $mult = 1;
        for($i=1; $i<=$expoente; $i++){
            $mult *= $base;
        }
        return $mult;
    }
    echo potencia(10, 3);
