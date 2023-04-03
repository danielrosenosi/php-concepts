<?php

    $arrayOne = range(1, 5);
    $arrayTwo = range(6, 10);

    $arrayOneAndTwoMerge = array_merge($arrayOne, $arrayTwo); //Unindo o array, é sempre adicionando ao fim do array

    print_r($arrayOneAndTwoMerge); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )