<?php

    $a = 10;
    $b = 15;

    function testeEscopo(){
        $a = 5;

        global $b;
        static $c = 0;
        $b++;
        $c++;

        echo "Escopo local de a: $a <br>";
        echo "Escopo global na função de b: $b <br>";
        echo "Escopo static de c: $c <br>";
    }

    testeEscopo();
    testeEscopo();

    echo "Escopo global de a: $a <br>";
     echo "Escopo global de b: $b <br>";