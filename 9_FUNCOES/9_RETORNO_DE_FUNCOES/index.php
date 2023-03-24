<?php

    function sum($numberOne, $numberTwo) {
        return $numberOne + $numberTwo;
    }

    //HARDCODED
    $result = sum(6, 6); //Armazenando o retorno da função em uma variável
    echo $result; // Vai imprimir 12

    echo "<br>";

    echo sum(4, 5); // Vai imprimir 9

    echo "<br>";

    //PASSANDO VARIÁVEIS COMO PARÂMETROS
    $valueOne = 12;
    $valueTwo = 12;

    echo sum($valueOne, $valueTwo);