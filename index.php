<?php

    function greet1(){
        echo 'Hello World';
    }


    function greet2($name){
        echo 'Hello '.$name;
    }
    greet2('Aneri');

    function greet($greeting, $name){
        echo strtoupper($greeting.' '.$name);
    }
    greet('Whats up','Aneri');

    $num1 = 50;

    $num2 = 50;

    if($num1 == 40){
        echo 'Correct';
    } elseif ($num1 == 50){
        echo 'Correct';    
    } else {
        echo 'Wrong';
    }

    $num = 50;
    $num2 = 20;


    if($num == 50 && $num == 40){
        echo 'Correct';        
    } else {
        echo 'Wrong';
    }

?>
