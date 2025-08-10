<?php

    $a = 10;
    $b = 80;
    $c = "teste";

    if(is_int($a)) {
        $mult1 = $a * 2;
        
        if($mult1 > 100) {
            echo "O numero é maior que 100<br>";
        } else {
            echo "O numero nao é maior que 100<br>";
        }
    } else {
        echo "Não é um número<br>";
    }

    if(is_int($b)) {
        $mult1 = $b * 2;
        
        if($mult1 > 100) {
            echo "O numero é maior que 100<br>";
        } else {
            echo "O numero nao é maior que 100<br>";
        }
    } else {
        echo "Não é um número<br>";
    }

    if(is_int($c)) {
        $mult1 = $c * 2;
        
        if($mult1 > 100) {
            echo "O numero é maior que 100<br>";
        } else {
            echo "O numero nao é maior que 100<br>";
        }
    } else {
        echo "Não é um número<br>";
    }