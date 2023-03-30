<?php
    //Array multidimensional OU Array de arrays OU Matriz

    //Array de arrays associativos
    $arrayOfArraysWithDefaultIndex = [
        [
            "name" => "Carlos Daniel",
            "age" => 17,
            "city" => "Pacajus"
        ],
        [
            "profile" => "super_admin",
            "active" => true
        ],
        [
            "salary" => 1350
        ]
    ];

    echo $arrayOfArraysWithDefaultIndex[2]['salary'] . "<br>"; // 1350
    echo $arrayOfArraysWithDefaultIndex[0]['name'] . " ganha R$" . $arrayOfArraysWithDefaultIndex[2]['salary']  . "<br>"; // Carlos Daniel ganha R$1350

    //Array associativo de arrays associativos
    $arrayOfArraysWithoutDefaultIndex = [
        "user" => [
            "name" => "Carlos Daniel",
            "age" => 17,
            "city" => "Pacajus"
        ],
        "account" => [
            "profile" => "super_admin",
            "active" => true
        ],
        "price" => [
            "salary" => 1350
        ]
    ];

    echo $arrayOfArraysWithoutDefaultIndex['user']['name'] . "<br>"; //Carlos Daniel
    echo $arrayOfArraysWithoutDefaultIndex['user']['name'] . " tem " . $arrayOfArraysWithoutDefaultIndex['user']['age'] . " anos" . "<br>"; //Carlos Daniel tem 17 anos

    //Testando em condicionais
    if ($arrayOfArraysWithoutDefaultIndex['account']['active']) {
        echo "A conta do usuário {$arrayOfArraysWithoutDefaultIndex['user']['name']} está ativa" . "<br>";
    } else {
        echo "A conta do usuário {$arrayOfArraysWithoutDefaultIndex['user']['name']} está inativa" . "<br>";
    }

    // Contando array de array
    echo count($arrayOfArraysWithoutDefaultIndex) . "<br>"; // retorna 3, pois o array principal está guardando três array dentro dele
    echo count($arrayOfArraysWithDefaultIndex) . "<br>"; // retorna 3, pois o array principal está guardando três array dentro dele

    echo count($arrayOfArraysWithoutDefaultIndex['account']) . "<br>"; // retorna 2, pois o array associativo "account" possui dois elementos nele
    echo count($arrayOfArraysWithDefaultIndex[1]) . "<br>"; // retorna 2, pois o array com o indíce 1 possui dois elementos nele