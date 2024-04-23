<?php 

    $peso = 20;
    $limite= 79;
    $msg = "Está pesado demais";
    $msg1 = "Peso dentro do limite";

    if( $peso >= 80 ){
        echo $msg . "<br>";
    }
    else {
        echo $msg1 . "<br>";
    }