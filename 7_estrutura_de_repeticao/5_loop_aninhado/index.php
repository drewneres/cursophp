<?php 

    $a = 1;

    $c = "variável teste";

    while($a <= 10){

        echo "loop externo $a " . "<br>"; 

        $j = 1;

        echo $c . "<br>";

        while($j <= 5 ){

        echo "loop interno $j " . "<br>"; 

        echo "$c 2" . "<br>";

        $j++;

        }

        $a++;

    }