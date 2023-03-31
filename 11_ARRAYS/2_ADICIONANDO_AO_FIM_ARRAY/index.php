<?php

    $arrayOne = [1, 2, 3, 4];

    $arrayOne[] = 5; // Dessa forma, sem passar o indíce, automaticamente ele é adicionado ao fim do array

    print_r($arrayOne); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    echo "<br>";

    $arrayTwo = [];

    $arrayTwo[] = 1; //Como o array está vazio, ele será adicionado ao indíce 0

    print_r($arrayTwo); // Array ( [0] => 1 )
    echo "<br>";