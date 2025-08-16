<?php

    $a = (int) "testando";  
    echo $a; // Outputs: 0
    echo "<br>";

    $b = (int) "12.9";
    echo $b; // Outputs: 12
    echo "<br>";    

    $c = (int) true;
    echo $c; // Outputs: 1
    echo "<br>";    

    $d = (int) [1, 2, 3];
    echo $d; // Outputs: 1
    echo "<br>";