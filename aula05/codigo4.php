<?php
    $salario = 2000.0;
    $estado_civil = "casado";

    if($salario < 4000.0 && $estado_civil=="casado"){
        $salario *= 1.30;
    }else{
        $salario *= 1.20;
    }

    echo $salario;