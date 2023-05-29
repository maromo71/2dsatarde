<?php
    require_once "loja.php";
    $estoque = new Loja;
    $estoque->adicionar("Bola", 100);
    $estoque->adicionar("Meia", 50);
    $estoque->adicionar("Camisa", 30);
    $estoque->adicionar("Camiseta", 10);
    $estoque->adicionar("Bola", 60);
    echo "Numero de cada item que tenho \n";
    foreach($estoque->itens as $key => $value){
        echo "O produto $key possui em estoque $value peças \n";
    }
    
