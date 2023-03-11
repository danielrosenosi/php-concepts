<?php

    // Estrutura de controle IF retornando um valor booleano TRUE
    if(5 > 2) { // Se 5 for maior que 2, então... 
        echo "Entrou no IF <br>";
    }

    // Estrutura de controle IF retornando um valor booleano FALSE
    if(5 < 2) { // Se 5 for menor que 2, então... 
        echo "Não entrou no IF pois é falso <br>";
    }

    if(10 === 10 && 9 > 3) { // Se 10 for igual a 10 E 9 for maior que 3, então... 
        echo "Entrou no IF pois é verdadeiro <br>";
    }

    $valueOne = 10;
    $valueTwo = 10;

    if($valueOne === $valueTwo) { // Se $valueOne for igual a $valueTwo, então... 
        echo "Entrou no IF pois é verdadeiro <br>";
    }