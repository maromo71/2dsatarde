<?php
    $num = 500;
    echo " $num \n"; //variável local
    function fazAlgo(){
        global $num;
        $num = $num + 1;
        echo " $num \n";
    }
    fazAlgo(); //chamando a funcao
    echo " $num \n";