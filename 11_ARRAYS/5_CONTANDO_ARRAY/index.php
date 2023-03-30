<?php

    $arrayOne = [1, 2, 3, 4, 5]; // Array harcoded

    $arrayTwo = range(1, 5); // Array criado com o range()

    $arrayThree = [
        "primeiro" => "Daniel",
        "segundo" => "Maria",
        "terceiro" => "João",
        "quarto" => "Pedro",
        "quinto" => "Jorge"
    ]; // Array associativo

    echo count($arrayOne) . "<br>"; //5
    echo count($arrayTwo) . "<br>"; //5
    echo count($arrayThree) . "<br>"; //5