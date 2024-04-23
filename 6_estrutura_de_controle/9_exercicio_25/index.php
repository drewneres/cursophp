<?php 

    $a = 22;
    $b = 55;
    $nome = "Hendrew";
    $altura = 186;
    $sexo = "M";
    

    if(is_int($a)){
        
        $multi = $a * 2;

        if($multi > 100){
            echo " o número é maior que 100" . "<br>";
        } else{

            echo "O número não é maior que 100" . "<br>";

        }

    } else{

        "Não é inteiro" . "<br>";

    }


    if(is_int($b)){
        
        $multi = $b * 2;

        if($multi > 100){
            echo " o número é maior que 100" . "<br>";
        } else{

            echo "O número não é maior que 100" . "<br>";

        }

    } else{

        "Não é inteiro" . "<br>";

    }


    if(is_int($nome) || is_float($nome)){
        
        $multi = $nome * 2;

        if($multi > 100) {

            echo " o número é maior que 100" . "<br>";

        } else {

            echo "O número não é maior que 100" . "<br>";

        }

    } else {

        "Não é inteiro" . "<br>";

    }

