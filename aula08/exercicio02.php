<?php
    function fatorial($n){
        $cont = $n;
        while($cont > 1){
            $n *= ($cont-1);
            $cont--;
        }
        return $n;
    }

    echo fatorial(5);