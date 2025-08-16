<?php

    if(is_int(5)){
        echo "é um inteiro1 <br>";
    }

    if(is_int("5")){
        echo "é um inteiro2";
    }

    $a = 10;
    if(is_int($a)){
        echo "é um inteiro 3";
    }