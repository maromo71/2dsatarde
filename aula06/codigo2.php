<?php
    $idade = readline("Digite uma idade ");
    $salario = readline("Digite um valro de salário: ");
    $sexo = readline("Digite M [masculino] F [Feminino] ");

    if( ($sexo == 'm' || $sexo == 'M') and ($idade < 30) ){
        $aumento = $salario * 0.15;
    }else {
        if( ($sexo == 'f' || $sexo=='F') and ($idade < 25)){
            $aumento = $salario * 0.20;
        }else{
            $aumento = $salario * 0.25;
        }
    }
    
    echo "Salário atual: " . $salario . " \n";
    echo "Aumento: " . $aumento . "\n";
    echo "Novo Salário: " . ($salario + $aumento) . "\n";