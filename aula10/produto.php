<?php 
class Produto {
    public $codigo;
    public $descricao;
    public $quantidade;
    public $valor;

    function __construct($codigo, $descricao, $quantidade, $valor) {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
    }
}