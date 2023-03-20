<?php
    $idade = readline("Digite uma idade ");
    $salario = readline("Digite um valro de salário: ");
    $sexo = readline("Digite M [masculino] F [Feminino] ");

    switch($sexo){
        case 'm':
        case 'M':
            if($idade < 30){
                $aumento = $salario * 0.15;
                break;
            }
            $aumento = $salario * 0.25;
            break;
        case 'f':
        case 'F':
            if($idade < 25){
                $aumento = $salario * 0.20;
                break;
            }
            $aumento = $salario * 0.25;
            break;
    }
    
    echo "Salário atual: " . $salario . " \n";
    echo "Aumento: " . $aumento . "\n";
    echo "Novo Salário: " . ($salario + $aumento) . "\n";