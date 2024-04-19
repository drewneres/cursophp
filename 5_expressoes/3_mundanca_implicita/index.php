<?php 

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)){
        echo "É float <br>"; 
    }

    echo 2 . 3; // concatenação
    echo "<br>";

    if(is_string( 2 . 3)){ // verifica se é string
        echo "É string <br>"; 
    }

    $nome = "Hendrew";
    $sobrenome = "Neres";

    $nomeCompleto = $nome . " " . $sobrenome; // concatenação de strings

    echo $nomeCompleto;
    echo "<br>";

