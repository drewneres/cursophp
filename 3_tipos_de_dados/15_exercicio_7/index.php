<?php 

   $pessoa = [ 
       'nome' => 'Hendrew', 
       'idade' => 22, 
       'sexo' => 'masculino', 
       'altura' => 1.86, 
       'peso' => 80.5 
   ];

   $maiorIdade = 18;

   if($pessoa['idade'] >= $maiorIdade){
       echo "A pessoa é maior de idade"; 
   }
    else{
         echo "A pessoa é menor de idade";
    }