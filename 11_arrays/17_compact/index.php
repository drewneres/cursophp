<?php

    $marca = "BMW";
    $motor = "2.0";
    $tetoSolar = true;
    $portas = 4;

    $carro = compact("marca", "motor", "tetoSolar", "portas"); // cria um array com as variáveis passadas

    print_r($carro);