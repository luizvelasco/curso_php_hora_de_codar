<?php

    $teste = "asd";
    echo "$teste global 1 <br>"; 

    if(true){
        $teste = "dsa";

        echo "$teste if <br>"; 
    }

    echo "$teste global 2 <br>"; 

    function funcao(){
        $teste = "xsxs";
        echo "$teste local 2 <br>"; 
    }

    funcao();

    function testandoGlobal(){
        global $teste;
        echo "$teste global funcao <br>"; 
    }

    testandoGlobal();