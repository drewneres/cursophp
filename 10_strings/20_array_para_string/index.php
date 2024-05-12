<?php 

    $arr = ["Pera", "Uva", "Maçã", "Kiwi"];

    $str = implode(", ",$arr);

    echo $str . "<br>";

    $arr2 = ["Avião", "Carro", "Jato", "Caminhão"];

    $str2 = implode(" <-> ", $arr2);

    echo $str2 . "<br>";