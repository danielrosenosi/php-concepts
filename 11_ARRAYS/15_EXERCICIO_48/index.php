<?php
    //EXERCICIO: CRIE UM ARRAY COM OS VALORES: BATATA, MAÇÃ, PERA, FEIJÃO, ARROZ
    //REMOVA PERA E FEIJÃO DO ARRAY 

    $foods = [
        "Batata",
        "Maça",
        "Pera",
        "Feijão",
        "Arroz"
    ];

    $removingPeraAndFeijao = array_splice($foods, 2, 2);

    print_r($removingPeraAndFeijao); //Array ( [0] => Pera [1] => Feijão )

    echo "<br>";
    echo "<br>";

    print_r($foods); //Array ( [0] => Batata [1] => Maça [2] => Arroz )