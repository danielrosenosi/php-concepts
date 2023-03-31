<?php

    //O ARRAY ORIGINAL É MODIFICADO UTILIZANDO O SPLICE PARA RESGATAR/REMOVER ELEMENTOS DE UM ARRAY

    //RESGATAR ELEMENTOS DE ARRAY
    //REMOER ELEMENTOS DE ARRAY

    /*
        OBSERVAÇÕES: O ARRAY ORIGINAL É MODIFICADO, E A FUNÇÃO SPLICE GERA UM NOVO ARRAY COM OS ELEMENTOS SUBTRAÍDOS DO ARRAY ORIGINAL

        EXEMPLO: 

        TEMOS UM ARRAY QUE VAI DE 1 ATÉ 5...
        $array = [1, 2, 3, 4, 5];

        SE FIZERMOS:
        $recebeNumeroCinco = array_splice($array, 4, 1);

        O RESULTADO É:
        $array agora tem seu valor como: [1, 2, 3, 4]

        e a variável $recebeNumeroCinco possui seu valor como: [5]
    */

    //UTILIZANDO INDÍCE POSITIVO

    $numbers = [1, 2, 3, 4, 5];

    $removingNumberFive = array_splice($numbers, 4, 1);

    print_r($numbers); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) REMOVEU O NÚMERO 5
    
    echo "<br>";
    echo "<br>";

    //A VARIÁVEL RECEBE UM NOVO ARRAY COM O NÚMERO QUE FOI REMOVIDO, NESSE CASO O 5
    print_r($removingNumberFive); //Array ( [0] => 5 )

    echo "<br>";
    echo "<br>";

    //ANTES DE APLICAR O SPLICE, O ARRAY CONTÉM Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ), do 1 ao 4
    $removingNumberTwoAndNumberThree = array_splice($numbers, 1, 2); //REMOVENDO O NÚMERO 2 E 3

    //APÓS APLICAR O SPLICE, AGORA O ARRAY CONTÉM OS NÚMEROS 1 E 4
    print_r($numbers); //Array ( [0] => 1 [1] => 4 )

    echo "<br>";
    echo "<br>";

    //A VARIÁVEL RECEBE UM NOVO ARRAY COM O NÚMERO QUE FOI REMOVIDO, NESSE CASO O 2 E O 3
    print_r($removingNumberTwoAndNumberThree); //Array ( [0] => 2 [1] => 3 )

    echo "<br>";
    echo "<br>";
    
    //UTILIZANDO INDÍCE NEGATIVo
    $numbersTwo = [1, 2, 3, 4, 5];

    $removingNumbersTwoThreeAndFour = array_splice($numbersTwo, 1, -1);

    print_r($removingNumbersTwoThreeAndFour); //Array ( [0] => 2 [1] => 3 [2] => 4 )

    echo "<br>";
    echo "<br>";

    print_r($numbersTwo); // Array ( [0] => 1 [1] => 5 )