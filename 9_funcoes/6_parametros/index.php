<?php 

    function velocidadeMaxima($vel){

        echo "O carro atinge a velocidade máxima de $vel km/h " ."<br>";

    }

    velocidadeMaxima(200);
    velocidadeMaxima(400);
    velocidadeMaxima(300);


    // Não pode executar funções que exigem parâmetros sem um parâmetro
    //velocidadeMaxima();

    $velocidade = 125;

    velocidadeMaxima($velocidade);

    //PHP ignora o parametro desnecessário
    velocidadeMaxima(250, "teste");