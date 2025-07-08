<?php

    class Pessoa {

        public $nome;

        public function falar(){
            echo "olá pessoal";
        }
    }

    $velasco = new Pessoa();

    $velasco->nome = "Velasco";

    echo $velasco->nome;

    echo "<br>";

    $velasco->falar();