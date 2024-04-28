<?php 

    function velocidadeMaxima($vel){

        if(is_int($vel)){

        echo "O carro atinge a velocidade máxima de $vel km/h " ."<br>";
        }else {
            echo "Por favor, insira um número inteiro" . "<br>";
        }


    }

    velocidadeMaxima(200);
    velocidadeMaxima(400);
    velocidadeMaxima(300);


    // Não pode executar funções que exigem parâmetros sem um parâmetro
    //velocidadeMaxima();

    $velocidade = 125;

    velocidadeMaxima($velocidade);

    //PHP ignora o parametro desnecessário
    velocidadeMaxima("teste");

    function descAnimal($nome,$raca){

        echo "O $nome é da raça $raca" . "<br>";

    }

    descAnimal("Willie", "Labrador");
    descAnimal("Bob", "Fila");
    descAnimal("Gato", "Preto");