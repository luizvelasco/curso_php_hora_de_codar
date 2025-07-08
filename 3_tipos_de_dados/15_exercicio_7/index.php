<?php

    $pessoa = [
                'sexo' => 'M',
                'cor' => 'branca',
                'idade' => 16
    ];

    if($pessoa['idade'] > 18){
        echo "maior de idade";
    } else {
        echo "menor de idade";
    }