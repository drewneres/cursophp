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
        echo "A chave existe" . "<br>";;
    } else {
        echo "A chave não existe ". "<br>";;
    }

    if(isset($arr['nome'])) {
        echo "A chave existe" . "<br>";
    } else {
        echo "A chave não existe". "<br>";
    }

    if(isset($arr['cleber'])) {
        echo "A chave existe" . "<br>";
    } else {
        echo "A chave não existe". "<br>";
    }


    if(isset($x)) {
        echo "A VAR existe" . "<br>";
    } else {
        echo "A VAR não existe". "<br>";
    }