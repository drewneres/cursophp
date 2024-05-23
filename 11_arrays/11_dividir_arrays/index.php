<?php 

    $arr = range(1, 20);

    print_r(array_chunk($arr, 4)); //serve para dividir o array em partes e quantas partes eu quiser

    echo "<br>";

    $arrays = array_chunk($arr, 10);

    print_r($arrays);
    echo "<br>";

    print_r($arrays[1]);
    echo "<br>";