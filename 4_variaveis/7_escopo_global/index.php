<?php 

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5>2){

        $teste = "dsa";

        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function testandoGlobal(){

        global $teste;

        $teste =2;

        echo "$teste local 3 <br>";
    }

    testandoGlobal();