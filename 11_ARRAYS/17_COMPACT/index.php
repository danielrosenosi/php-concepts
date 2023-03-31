<?php

    $name = "Carlos";
    $age = 17;
    $city = "Pacajus";
    $live = true;

    $victories = [
        "Primeira" => 2000,
        "Segunda" => 2010,
        "Terceira" => 2020
    ];
    
    $creatingArrayAssociative = compact('name', 'age', 'city', 'live'); // Criou um array associativo, com o nome das variáveis e seu dados
    print_r($creatingArrayAssociative); // Array ( [name] => Carlos [age] => 17 [city] => Pacajus [live] => 1 )

    echo "<br>";
    echo "<br>";

    /*
        Vale lembrar que o compact aceita variáveis de todos os tipos, inclusive arrays, logo ele criará um array associativo,
        onde naquela chave (criada de uma variável que contém array) está outro array
    */

    $creatingArrayAssociativeWithArray = compact('name', 'age', 'city', 'live', 'victories');
    print_r($creatingArrayAssociativeWithArray); // Array ( [name] => Carlos [age] => 17 [city] => Pacajus [live] => 1 [victories] => Array ( [Primeira] => 2000 [Segunda] => 2010 [Terceira] => 2020 ) )