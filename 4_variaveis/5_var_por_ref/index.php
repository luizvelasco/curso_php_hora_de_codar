<?php

    $x = 10;

    $y = & $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y =15;

    echo "Atribuiicao apos ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "Atribuiicao apos ref 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome = "Velasco";

    $nome2 = & $nome;

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "Luiz";

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";
