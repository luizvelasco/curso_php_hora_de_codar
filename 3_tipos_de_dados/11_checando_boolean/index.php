<?php

    $a = true;

    if(is_bool($a)){
        echo "É booleano <br>";
    }

    if(is_bool(0)){
        echo "É booleano <br>";
    }

    if(is_bool(false)){
        echo "É booleano <br>";
    }

    if(0 == false) {
        echo "Zero é considerado falso";
    }