<?php

    /*
        As funções sort() e rsort() do PHP, não funcionam em array associativos
    */

    /*
        sort() => coloca em ordem crescente (para números), coloca na ordem de A à Z (para letras)
        rsort() => coloca em ordem decrescente (para números), coloca na ordem de Z à A (para letras)
    */

    $ages = [5, 9, 10, 19, 9, 3, 4, 20, 48, 102];
    $names = ["Carlos", "Pedro", "Daniel", "Ana", "José"];
    
    sort($ages); //Alterou o array original, o array agora está na ordem do menor para o maior (dos números)
    sort($names); //Alterou o array original, agora o array está em ordem crescente, do álfabeto (de A até Z, lembrando que é levado em consideração a primeira letra da palavra)

    //Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 9 [4] => 9 [5] => 10 [6] => 19 [7] => 20 [8] => 48 [9] => 102 )
    print_r($ages);

    echo "<br>";
    echo "<br>";

    print_r($names); //Array ( [0] => Ana [1] => Carlos [2] => Daniel [3] => José [4] => Pedro )

    echo "<br>";
    echo "<br>";

    rsort($ages); //Alterou o array original, o array agora está na ordem do maior para o menor (dos números)
    rsort($names); //Alterou o array que estava em ordem crescente, para ordem decrescente do álfabeto (de Z até A, lembrando que é levado em consideração a primeira letra da palavra)

    //Array ( [0] => 102 [1] => 48 [2] => 20 [3] => 19 [4] => 10 [5] => 9 [6] => 9 [7] => 5 [8] => 4 [9] => 3 )
    print_r($ages);

    echo "<br>";
    echo "<br>";

    //Array ( [0] => Pedro [1] => José [2] => Daniel [3] => Carlos [4] => Ana )
    print_r($names);