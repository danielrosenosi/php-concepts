<?php
    /*
        a função shuffle() MODIFICA a estrutura original do array, o array fica em ordem aleatória
    */

    $array = range(1, 20);

    //Colocando o array em ordem aleatória!
    shuffle($array);
    print_r($array); //Array ( [0] => 19 [1] => 17 [2] => 6 [3] => 8 [4] => 12 [5] => 14 [6] => 1 [7] => 16 [8] => 2 [9] => 4 [10] => 11 [11] => 13 [12] => 7 [13] => 9 [14] => 3 [15] => 15 [16] => 18 [17] => 10 [18] => 5 [19] => 20 )