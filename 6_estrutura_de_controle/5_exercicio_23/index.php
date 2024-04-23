<?php 

$a = 7;
$b = 17;
$c = 27;

$maiorIdade = 18;

$msg = "Você é maior de idade";
$msg1 = "Você não é maior de idade";

if( $a >= $maiorIdade){
   echo "1- ". $msg  . "<br>";
}

else{
    echo "1- ". $msg1  . "<br>";
}

if( $b >= $maiorIdade){
   echo "2- ". $msg  . "<br>";
}

else{
    echo "2- ". $msg1  . "<br>";
}

if( $c >= $maiorIdade){
   echo "3- ". $msg  . "<br>";
}

else{
    echo "3- ". $msg1  . "<br>";
}