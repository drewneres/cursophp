<?php 

    $a = "Testezin";
    $b = 10.5;

    if(is_float($a)){ // is float checa se é true
        echo "É float 1!<br>";// false
    }

    if(is_float($b)){
        echo "É float 2!<br>"; // true
    }

    if(is_float(654.543)){
        echo "É float 3!<br>"; // true
    }
