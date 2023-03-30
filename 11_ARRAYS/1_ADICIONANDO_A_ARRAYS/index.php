<?php
    //Array
    $array = [];

    print_r($array); // Array ()
    echo "<br>";

    $array['0'] = "Primeiro";

    print_r($array); // Array ( [1] => Primeiro )
    echo "<br>";

    $array['1'] = "Segundo";

    print_r($array); // Array ( [0] => Primeiro [1] => Segundo )
    echo "<br>";

    $array['0'] = "1";

    print_r($array); // Array ( [0] => 1 [1] => Segundo )
    echo "<br>";  
    
    $array['0'] += 5;
    
    print_r($array); // Array ( [0] => 6 [1] => Segundo )
    echo "<br>";

    //Array associativo

    $arrayAssociative = [];

    $arrayAssociative['carOne'] = "BMW";

    print_r($arrayAssociative); // Array ( [carOne] => BMW )
    echo "<br>";

    $arrayAssociative['carTwo'] = "MERCEDES";

    print_r($arrayAssociative); // Array ( [carOne] => BMW [carTwo] => MERCEDES )
    echo "<br>";

    //Alterando valor em array associativo

    $arrayAssociative['carOne'] = "FIAT";

    print_r($arrayAssociative); // Array ( [carOne] => FIAT [carTwo] => MERCEDES )
    echo "<br>";