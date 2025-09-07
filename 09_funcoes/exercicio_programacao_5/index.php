<?php

    function sumEvenNumbers($x) {
        if ($x <=0 ) {
            return 0;
        }

        $sum = 0;

        for ($i=2; $i <= $x ; $i+=2) { 
            $sum += $i;
        }

        return $sum;
    }
    $number = 10;
    $resultado = sumEvenNumbers($number);
    echo "A soma dos números pares de 1 até $number é: $resultado";
