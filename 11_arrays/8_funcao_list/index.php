<?php 

    $pessoa = ["Hendrew", 22, "Dev", "castanho"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corOlhos) = $pessoa; // serve para desconstruir um array

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corOlhos <br>";