<?php 

    function teste(){

        $a = 0;
        $a++;

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
