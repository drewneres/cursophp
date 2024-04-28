<?php 

    function parOuImpar($num){

        if($num % 2 === 0){
            echo "O número $num é par" . "<br>";
        }else{
            echo "O número $num é impar". "<br>";
        }


    }

    parOuImpar(3);
    parOuImpar(4);