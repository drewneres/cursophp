<?php 

    $frase = "Carro - Navio - Helicóptero - Barco - Jangada";

    $fraseArray = explode(" - ", $frase);

    for($i = 0;$i < count($fraseArray); $i++){

        echo "Item: $fraseArray[$i] <br>";

    }