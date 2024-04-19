<?php 

    $a = "5" * 12;

    echo $a . "<br>"; // retorna 60

    echo gettype($a) . "<br>";  // retorna o tipo da variável

    echo gettype([]);
    echo "<br>";
    echo gettype(11.1);
    echo "<br>";
    echo gettype("Hendrew");