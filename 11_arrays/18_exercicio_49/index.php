<?php 

    $raca = "Labrador";
    $cor = "preto";
    $idade = 5;

    $cachorro = compact("raca", "cor", "idade");

    print_r($cachorro);
    echo "<br>";

    foreach($cachorro as $caracteristica => $value){ // percorre o array

        echo "$caracteristica: $value <br>"; // exibe as caracteristicas do cachorro

    }