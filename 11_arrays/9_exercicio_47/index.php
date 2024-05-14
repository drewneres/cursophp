<?php 

    $carro = ["Jaguar", 3.0, "Azul", 18, "Teto solar", "Automático"];

    print_r($carro);
    echo "<br>";

    list($marca, $potencia, $cor, $ano, $teto, $tipo) = $carro;

    echo $marca . "<br>";
    echo $potencia . "<br>";
    echo $cor . "<br>";
    echo $ano . "<br>";
    echo $teto . "<br>";
    echo $tipo . "<br>";