<?php 

    $a = 4;
    $limite = 30;

    while( $a < $limite){

        echo "Executando loop " . $a . "<br>";

        if($a === 24){
            echo "interrompendo loop" . "<br>";
            break;
        }

        $a += 2;

    }
