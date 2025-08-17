<?php

    $x = [1,2,true,"luiz", 654, "velasco", [1,2,3], "braga"];

    $i = 0;

    while ($i < count($x)) {
        if(is_string($x[$i])) {
            echo $x[$i] . "<br>";
        }

        $i++;
    }