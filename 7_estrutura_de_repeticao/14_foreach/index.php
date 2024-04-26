<?php 

    $nomes = ["Cleber", "Jacob", "Jonas", "Mudin", "Jason"];

    $a = "aiai";

    foreach ($nomes as $nome){ // o foreach é uma estrutura orientada a um array, ou seja ela só roda se tiver um array pronto

        echo "o nome é: $nome" . "<br>";
        if($nome == "Cleber"){
            echo "Hendrew " . $a . "<br>";
        }

    }