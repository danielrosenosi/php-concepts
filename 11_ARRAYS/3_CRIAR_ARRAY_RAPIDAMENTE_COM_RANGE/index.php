<?php

    //range(primeiro elemento, último elemento do array)
    $arrayWithRangeOne = range(1, 10); //O resultado é um array que inicia em 1, e termina em 10

    print_r($arrayWithRangeOne); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )
    echo "<br>";

    $arrayWithRangeTwo = range(10, 100); //O resultado é um array que inicia em 10, e termina em 100

    print_r($arrayWithRangeTwo); // Array ( [0] => 10 [1] => 11 [2] => 12 [3] => 13 [4] => 14 [5] => 15 [6] => 16.....)
    echo "<br>";

    //Alterando o step do array(a sequência que o array vai obedecer)
    $arrayWithRangeThree = range(0, 100, 10); // O resultado é um array que vai de 0 até 100, porém de 10 em 10
    
    print_r($arrayWithRangeThree); // Array ( [0] => 0 [1] => 10 [2] => 20 [3] => 30 [4] => 40 [5] => 50 [6] => 60 [7] => 70 [8] => 80 [9] => 90 [10] => 100 )
    echo "<br>";