<?php
    class Loja {
        var $itens;

        function adicionar($produto, $quantidade){
            if(isset($this->itens[$produto])){
                $this->itens[$produto] += $quantidade;
            }else{
                $this->itens[$produto] = $quantidade;
            }
        }

        function remover($produto, $quantidade){
            if($this->itens[$produto] > $quantidade){
                $this->itens[$produto] -= $quantidade;
                return true;
            }else{
                return false;
            }
        }
    }