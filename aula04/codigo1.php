<?php
    $professores = [
        "Sinzomar", 
        "Maromo",
        "Rodrigo",
        "Pedro"
    ];
    echo $professores[3];
    echo "\n";
    //percorrer o vetor
    for($i=0; $i<4; $i++){
        echo "$professores[$i] \n";
    }