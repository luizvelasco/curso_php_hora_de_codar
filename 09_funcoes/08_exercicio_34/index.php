<?php

    function numero($num) {
        if($num % 2 == 0) {
            echo "O $num é par <br>";
        } else {
            echo "O $num é ímpar <br>";
        }
    }

    numero(4);
    numero(5);
    numero(6);
    numero(77);