<?php
    function tabuada($n){
        for ($i=1; $i<=10 ; $i++) { 
            echo "$n X $i = " . $n*$i  . "\n";
        }
    }
    echo tabuada(8);