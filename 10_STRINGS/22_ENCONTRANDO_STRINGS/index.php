<?php

    $str = "Carlos Daniel Roseno de Lima";

    echo strpos($str, "Roseno") . "<br>"; //Ele imprime o indíce onde se inicia a string buscada
    
    echo strpos($str, "Silva"); //Não imprime nada, retornou false, pois não existe a string dentro da string buscada

    if(strpos($str, "Lima")) {
        echo "O usuário tem o sobrenome Lima";
    } else {
        echo "O usuário não tem o sobrenome Lima";
    }

    echo "<br>";

    if(!strrpos($str, "Silva")) {
        echo "O usuário não tem o sobrenome Silva, ele não passou no teste";
    }