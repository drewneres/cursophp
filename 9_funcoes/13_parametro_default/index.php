<?php 

    function teste($a = "teste"){

        echo "O valor de A é: $a" . "<br>";

    }


        teste();
        teste("ab");

    function testando($b, $a = "x"){ // sempre deixar os argumentos default a direita

        echo "O valor de A é: $a e de b é: $b" . "<br>";

    }

        testando("asda");
        testando("asda", 1);