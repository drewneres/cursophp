<?php 

    $arr = [ 1 , 2, 2.3, 4 , "rafael", "joão", "Hendrew", 7.7, true, false, "Cleber"];

    $x = count($arr);
    $y= 0;

    while($y < $x){

        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;

    }
