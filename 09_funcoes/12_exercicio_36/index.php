<?php

    function numeros($arr){

        $resultado = [];
        foreach ($arr as $numero) {
            if($numero > 7) {
                $resultado[] = $numero;
            }
        }
        
        return $resultado;
    }

    print_r(numeros([2,3,4,5,8,9,88]));