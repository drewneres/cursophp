<?php 

    $arr = [
        "cor" => "vermelho",
        "forma" => "retangular",
        "material" => "aço"
    ];

    extract($arr); // serve para criar variáveis a partir de um array

    echo "$cor" . "<br>";
    echo "$forma" . "<br>";
    echo "$material" . "<br>";

    $nome = "Hendrew";

    $pessoa =[
        "nome" =>"João",
        "idade" => 22
    ];
    echo "$nome" . "<br>";

    extract($pessoa); // cria variáveis com os indices do array

    echo "$nome" . "<br>";
    echo "$idade" . "<br>";