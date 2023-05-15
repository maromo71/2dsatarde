<?php
    function somatoria($n){
        $cont = $n;
        while($cont > 1){
            $n += ($cont-1);
            $cont--;
        }
        return $n;
    }

    echo somatoria(5);