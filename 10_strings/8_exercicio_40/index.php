<?php 

    $frase = "O rato roeu a roupa do rei de roma";

    $contadorDeAs = 0;

    for($i = 0; $i < strlen($frase); $i++){

        

        if($frase[$i] === "a"){
            $contadorDeAs++;
        }

        

    }

    echo "o numero de a's na frase é de : $contadorDeAs";