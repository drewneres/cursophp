<?php 

    $frase = "testando o case de uma palavra" . "<br>";
    $frase2 = "Testando o case de uma palavra" . "<br>";
    $frase3 = "testando o case de uma palavra" . "<br>";

    echo ucfirst($frase); // ucfirst deixa a primeira letra da frase maiúscula
    echo ucfirst($frase2);


    echo ucwords($frase3);// ucwords deixa todas as palavras com iniciais maiúscula
