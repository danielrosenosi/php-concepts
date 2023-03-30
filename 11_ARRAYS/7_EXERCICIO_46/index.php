<?php
    //Array associativo
    $winners = [
        "soccer_winners" => [
            "primeiro" => "Jão",
            "segundo" => "Maria",
            "terceiro" => "Pedro",
            "quarto" => "Joaquim"
        ],
        "basketball_winners" => [
            "primeiro" => "Carlos",
            "segundo" => "Heitor",
            "terceiro" => "Nicolas",
            "quarto" => "Jefersson"
        ],
        "volleball_winners" => [
            "primeiro" => "Marcos",
            "segundo" => "Gabriel",
            "terceiro" => "Maciel",
            "quarto" => "Lucas"
        ],
    ];

    $arrayDefault = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    //Exercício utilizando foreach e array associativo
    $countArray = 0;

    foreach($winners as $arrayWinner) {
        $countArray++;
        
        echo "Imprimindo array interno {$countArray}" . "<br>";

        //Imprimindo elementos do array
        foreach($arrayWinner as $peopleWinner) {
            echo $peopleWinner . "<br>";
        }

        echo "<br>";
    }

    echo "<br>";

    //Exercicio utilizando for e array default
    for($i = 0; $i < count($arrayDefault); $i++) {
        echo "Imprimindo array interno " . ($i + 1) . "<br>";

        //Imprimindo elementos do array
        for($j = 0; $j < count($arrayDefault[$i]); $j++) {
            echo $arrayDefault[$i][$j] . "<br>";
        }

        echo "<br>";
    }