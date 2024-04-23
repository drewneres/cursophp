<?php 

    $a = 12;
    $b = "hendrew";
    $c = 1.12;

    if( is_int ($a)  ){
       echo "é inteiro 1 " . "<br>";
    }
    else{
        echo "não é inteiro 1" . "<br>";
    }

    if( is_string ($b)  ){
        echo "é string 2 " . "<br>";
     }
     else{
         echo "não é string 2" . "<br>";
     }

     if( is_bool ($c)  ){
        echo "é boolean 3" . "<br>";
     }
     else{
         echo "não é boolean 3" . "<br>";
     }
