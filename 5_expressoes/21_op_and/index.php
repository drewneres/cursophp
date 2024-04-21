<?php 

    if( 5 > 10 && 10 > 5){
        echo "entrou no if 1" . "<br>";
    }


    if ( 10 > 5 && 2 < 8){
        echo "entrou no if 2" . "<br>";
    }

    if ( 5 > 55 && 22 > 80){
        echo "entrou no if 3" . "<br>";
    }


    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if($a > $b && $c == $d){
        echo "entrou no if 4" . "<br>";
    }

    if($b <= $a && $c >= $d){
        echo "entrou no if 5" . "<br>";
    }

    if($b === $a && $c > $d){
        echo "entrou no if 6" . "<br>";
    }

    if(($b <= $a && $c >= $d) && $a > $b){
        echo "entrou no if 7" . "<br>";
    }

    if($b <= $a && $c >= $d && $c === $a){
        echo "entrou no if 8" . "<br>";
    }