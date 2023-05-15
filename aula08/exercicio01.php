<?php
    function multiplicar($a, $b){
        $soma = 0;
        for($i = 1; $i<=$b; $i++){
            $soma += $a;
        }
        return $soma;
    }
    echo multiplicar(50, 4);