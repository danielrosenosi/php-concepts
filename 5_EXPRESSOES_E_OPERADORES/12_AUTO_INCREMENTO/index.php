<?php

    $numbers = [1,2,3,4]; // Array de números

    foreach ($numbers as $number) { // Percorre o array de números
        $number++; // O operador ++ incrementa (adiciona) o valor da variável em 1
        echo $number; // 2, 3, 4, 5
    }

    echo "<br>";

    foreach ($numbers as $number) { // Percorre o array de números
        $number--; // O operador -- decrementa (subtrai) o valor da variável em 1
        echo $number; // 0, 1, 2, 3
    }