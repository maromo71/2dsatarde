<?php
    function invertida($texto){
        $tam = strlen($texto);
        $cont = $tam;
        while($cont >= 0){
            echo $texto[$cont--];
        }
    }
    echo invertida("iago");