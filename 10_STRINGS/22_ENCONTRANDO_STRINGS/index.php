<?php

    $str = "Carlos Daniel Roseno de Lima";
    $searchStringOne = "Lima";
    $searchStringTwo = "Silva";

    echo strpos($str, $searchStringOne) . "<br>"; //Ele imprime o indíce onde se inicia a string buscada
    
    echo strpos($str, $searchStringTwo); //Não imprime nada, retornou false, pois não existe a string dentro da string buscada

    if(strpos($str, $searchStringOne)) {
        echo "O usuário tem o sobrenome {$searchStringTwo}";
    } else {
        echo "O usuário não tem o sobrenome {$searchStringTwo}";
    }

    echo "<br>";

    if(!strrpos($str, $searchStringTwo)) {
        echo "O usuário não tem o sobrenome {$searchStringTwo}, ele não passou no teste";
    }