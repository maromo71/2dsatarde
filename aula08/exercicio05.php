<?php
    function repeticao($texto, $num){
        for ($i=1; $i <= $num; $i++) { 
            echo "$texto \n";
        }
    }
    repeticao("abóbora", 3);