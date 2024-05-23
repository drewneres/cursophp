<?php 

    $carro = [
        'marca' => 'Volkswagen',
        'modelo' => 'Gol',
        'ano' => 2019
    ];
    
    $chaves = array_keys($carro); //pega as chaves do array no caso marca, modelo e ano

    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro); //pega os valores do array pega Volkswagen, Gol e 2019

    print_r($valores);
    echo "<br>";
