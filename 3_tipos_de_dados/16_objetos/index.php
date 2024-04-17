<?php 

class Pessoa {

        function falar(){
            echo "Olá, eu sou uma pessoa";
        }

    }

    $hendrew = new Pessoa();

    $hendrew->nome = "Hendrew";

    echo $hendrew->nome;

    echo "<br>";

    $hendrew->falar();