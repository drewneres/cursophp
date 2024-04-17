<?php 

    $carro = [ 
        'marca' => 'Fiat', 
        'rodas' => 4, 
        'teto_solar' => false, 
        'anodocarro' => 2010, 
        'preco' => 20000.00 
    ];
    print_r($carro);

    $marca = $carro['marca'];
    $ano = $carro['anodocarro'];
    echo "<br>";
    echo "O carro é da marca $marca e foi fabricado no ano de $ano";