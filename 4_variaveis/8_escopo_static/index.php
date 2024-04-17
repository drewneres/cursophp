<?php 

    function teste(){ // variavel local

        $a = 0; // o valor sempre será 0
        $a++;   // incrementa o valor de a mas como não é static sempre será 1

        echo $a . "<br>";

    }

    teste();
    teste();
    teste();

    function teste2(){ // static mantem o valor da variavel

        static $b = 0;
        $b++; // incrementa o valor de b

        echo $b . "<br>";

    }           
    teste2();
    teste2();
    teste2();
