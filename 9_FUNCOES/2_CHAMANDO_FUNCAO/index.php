<?php

    function Sum($number1, $number2) {
        return $number1 + $number2;
    }

    $valueOne = 10;
    $valueTwo = 1;

    echo Sum($valueOne, $valueTwo);

    echo "<br>";

    //Testando função nativa do PHP que deixa o texto em caixa alta
    echo strtoupper("Oi, eu sou o Daniel");