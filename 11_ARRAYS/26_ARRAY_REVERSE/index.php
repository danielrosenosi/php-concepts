<?php
    /*
        array_reverse() gera um novo array REVERSO, com o dados invertidos do array passado no parâmetro

        OBS: a função array_reverse() não altera o array original! Logo precisa estar em uma variável se quiser user em outro lugar
    */

    $arrayOne = [1, 2, 3, 4, 5];
    $arrayOneReverse = array_reverse($arrayOne);
    
    $arrayTwo = ["Carlos", 17, "Pacajus", true];
    $arrayTwoReverse = array_reverse($arrayTwo);

    print_r($arrayOne); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    echo "<br>";

    print_r($arrayOneReverse); //Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
    echo "<br>";
    echo "<br>";

    print_r($arrayTwo); //Array ( [0] => Carlos [1] => 17 [2] => Pacajus [3] => 1 )
    echo "<br>";

    print_r($arrayTwoReverse); //Array ( [0] => 1 [1] => Pacajus [2] => 17 [3] => Carlos )