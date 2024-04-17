<?php 

    

    if(is_int(5)){ //true // is int verifica se é inteiro e retorna se for true 
        echo "É inteiro<br>";
    }

    if(is_int("Não é um inteiro")){ //false
        echo "É inteiro<br>";
    }

    $numero = 5;

    if(is_int($numero)){ //true
        echo "É inteiro<br>";
    }