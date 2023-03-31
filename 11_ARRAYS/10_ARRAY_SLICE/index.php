<?php

    //O ARRAY ORIGINAL NÃO É MODIFICADO UTILIZANDO O SLICE PARA RESGATAR ELEMENTOS DE UM ARRAY
    $array = [2, 4, 6, 8, 10];
    
    $slice = array_slice($array, 2, 3); // Vai gerar um array com 3 elementos (a partir do indíce 2) buscados no array base, 

    print_r($slice); // Array ( [0] => 6 [1] => 8 [2] => 10 )

    echo "<br>";
    echo "<br>";

    print_r($array); //Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )