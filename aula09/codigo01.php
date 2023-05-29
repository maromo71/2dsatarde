<?php
    require_once "loja.php";

    $estoque = new Loja;
    $estoque->adicionar("Bola", 100);
    $estoque->adicionar("Meia", 50);
    $estoque->adicionar("Camisa", 30);

    echo "Numero de cada item que tenho \n";
    echo $estoque->itens["Bola"] . " bolas \n";
    echo $estoque->itens["Meia"] . " meias \n";
    echo $estoque->itens["Camisa"] . " camisas \n";
