<?php 

    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);
    echo "<br>";

    $fraseArray2 = explode(",", $frase);

    print_r($fraseArray);
    echo "<br>";

    $fraseB = "Carro, Moto, Jacobina, Navio";

    $fraseBArray = explode(",", $fraseB);

    print_r($fraseBArray);
    echo "<br>";

    for($i = 0; $i < count($fraseBArray); $i++){

        echo "$fraseBArray[$i] <br>";

    }