<?php

    //Função para calcular um número ao quadrado
    function squareOfNumber($number) {
        return $number * $number;
    }

    $valueOne = 10;
    $valueTwo = 20;

    echo squareOfNumber($valueOne); //Vai imprimir 100
    
    echo "<br>";

    echo squareOfNumber($valueTwo); //Vai imprimir 400