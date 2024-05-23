<?php 

    $arr = [
        'nome' => 'Hendrew',
        'idade' => 22,
        'cidade' => 'Formosa'
    ];
    
    if (array_key_exists('nome', $arr)) {
        echo "A chave existe" . "<br>";
    } else {
        echo "A chave não existe". "<br>";
    }

    if (array_key_exists('profissão', $arr)) {
        echo "A chave existe";
    } else {
        echo "A chave não existe ";
    }