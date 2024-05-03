<?php 

    $arr = [
        'porta' => 100,
        'motor' =>2100,
        'roda' => 10,
        'retrovisor' => 7

    ];
    
    function itensCaros($arr){

        $arrItensCaros = [];

        foreach($arr as $item => $preco){

            if($preco > 10){
                array_push($arrItensCaros, $item);
            }
            else{
                echo "item barato";
            }

        }
        return $arrItensCaros;

    }

    $novoArray = itensCaros($arr);

    print_r($novoArray);


    