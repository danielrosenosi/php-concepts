<?php

    //FUNÇÃO TESTE 1
    function testDefaultParemeterOne($value = 5) {
        return $value + $value;
    }

    //FUNÇÃO TESTE 2
    function testDefaultParemeterTwo($firstName = "SEU", $lastName = "NOME") {
        return $firstName . " " . $lastName;
    }


    //CHAMANDO FUNÇÃO TESTE 1
    $age = 10;

    echo testDefaultParemeterOne($age); //Retorna 20, pois passei $age como parâmetro, que contém 10 como seu valor

    echo "<br>";

    echo testDefaultParemeterOne(); //Retorna 10, pois como eu não passei um dado como parâmetro, ele irá usar o valor default que foi definido na função (5)

    //CHAMANDO FUNÇÃO TESTE 2
    $variableFirstName = "Carlos";
    $variableLastName = "Daniel";

    echo "<br>";

    echo testDefaultParemeterTwo($variableFirstName, $variableLastName); //Retorna Carlos Daniel, pois passei Carlos e Daniel como parâmetro

    echo "<br>";

    echo testDefaultParemeterTwo(); //Retorna SEU NOME, pois eu não passei parâmetros na função