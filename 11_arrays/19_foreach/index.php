<?php 

    $hendrew = [
        "nome" =>"Hendrew",
        "idade" => 23,
        "profissao" => "Desenvolvedor"
    ];

    $cleber = [
        "nome" =>"Cleber",
        "idade" => 25,
        "profissao" => "Dev"
    ];

    foreach($hendrew as $carac => $value){

        echo "$carac => $value <br>";

    }

    foreach($cleber as $carac => $value){

        echo "$carac => $value <br>";

    }