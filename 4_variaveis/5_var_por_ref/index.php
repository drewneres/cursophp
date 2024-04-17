<?php 

    $x = 10;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 20;

    echo "Atribuição após referência:";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";


    $x= 35;

    echo "Atribuição após referência 2:";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

