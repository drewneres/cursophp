<?php 

    if(10 > 2){
        echo "entrou no if" . "<br>";
    
        if ("teste" == "teste"){

            echo "entrou no segundo if" . "<br>";

        }
    }

    if(10 > 2){
        echo "entrou no if 2" . "<br>";
    
        if ("teste" != "teste"){

            echo "entrou no segundo if 2" . "<br>";

        } else{

            echo "entrou no segundo else 2" . "<br>";

        }
    }


    $escopo = 10;

    if(10 > 2){
        echo "entrou no if 2" . "<br>";
    
        if ("teste" == "teste"){

            echo "entrou no segundo if 2" . "<br>";

            echo $escopo;

        } else{

            echo "entrou no segundo else 2" . "<br>";

        }
    }else{

        echo " entrou no primeiro else" . "<br>";
            
    }

    if(10 > 2){
        echo "entrou no if 2" . "<br>";
    
        if ("teste" != "teste"){

            echo "entrou no segundo if 2" . "<br>";

        } else{

            echo "entrou no segundo else 2" . "<br>";

        }
    }else{

        echo " entrou no primeiro else" . "<br>";
            
    }