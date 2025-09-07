<?php

    function defineCorCarro($cor = "Vermelha") {
        return $cor;
    }

    echo "A cor do carro é " . defineCorCarro() . "<br>";
    echo "A cor do carro é " . defineCorCarro("Azul") . "<br>";
    echo "A cor do carro é " . defineCorCarro("Branco") . "<br>";