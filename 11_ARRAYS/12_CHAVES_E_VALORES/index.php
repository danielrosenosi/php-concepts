<?php

    $arrayOfArraysAssociative = [
        "names" => [
            "João",
            "Maria"
        ],
        "ages" => [
            19,
            20
        ],
        "cities" => [
            "Pacajus",
            "Horizonte"
        ]
    ];

    $arrayAssociative = [
        "name" => "Carlos Daniel",
        "age" => 17,
        "city" => "Pacajus"
    ];

    //UTILIZANDO ARRAY DE ARRAYS

    //Imprimindo as chaves do array de arrays associativo
    print_r(array_keys($arrayOfArraysAssociative)); // Array ( [0] => names [1] => ages [2] => cities )
    echo "<br>";
    echo "<br>";

    //Imprimindo os valores de um array de arrays associativo
    print_r(array_values($arrayOfArraysAssociative)); // Array ( [0] => Array ( [0] => João [1] => Maria ) [1] => Array ( [0] => 19 [1] => 20 ) [2] => Array ( [0] => Pacajus [1] => Horizonte ) )
    echo "<br>";
    echo "<br>";

    //Imprimindo os valores de cada array que está dentro do array de arrays associativo
    foreach($arrayOfArraysAssociative as $array) {
        print_r(array_values($array));
        
        echo "<br>";
    }

    //UTILIZANDO ARRAY COMUM

    //Imprimindo as chaves do array de arrays associativo
    print_r(array_keys($arrayAssociative)); // Array ( [0] => names [1] => ages [2] => cities )
    echo "<br>";
    echo "<br>";

    //Imprimindo os valores de um array de arrays associativo
    print_r(array_values($arrayAssociative)); // Array ( [0] => Array ( [0] => João [1] => Maria ) [1] => Array ( [0] => 19 [1] => 20 ) [2] => Array ( [0] => Pacajus [1] => Horizonte ) )
    echo "<br>";
    echo "<br>";

    //Imprimindo os valores de cada array que está dentro do array de arrays associativo
    foreach($array as $value) {
        print_r(array_values($arrayAssociative));
        
        echo "<br>";
    }