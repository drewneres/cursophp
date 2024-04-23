<?php 

    $velocidade = 220;
    $velMax = 40;

    if( $velocidade < $velMax ){

        echo "Você está na velocidade correta" . "<br>";

    }else if( $velocidade === $velMax){

        echo "Tome cuidado com a velocidade, você está no limite!" . "<br>";

    }else{
        echo "Multa no valor de 105,97, por excesso de velocidade" . "<br>";
    }