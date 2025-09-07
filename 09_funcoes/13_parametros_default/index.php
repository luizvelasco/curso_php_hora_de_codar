<?php

    function teste ($a = "teste") {
        echo $a . "<br>";
    }

    teste();
    teste("asd");

    function testando ( $b, $a = "x") {
        echo "O valor de A é: $a e de B é $b <br>";
    }

    testando("a");