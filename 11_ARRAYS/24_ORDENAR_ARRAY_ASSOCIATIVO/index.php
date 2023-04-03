<?php

    /*
        As funções asort() e arsort() do PHP, só funcionam em array associativos
    */

    /*
        asort() => coloca os VALORES em ordem crescente (para números), coloca na ordem de A à Z (para letras)
        arsort() => coloca os VALORES em ordem decrescente (para números), coloca na ordem de Z à A (para letras)
    */

    /*
        ksort() => coloca as CHAVES em ordem crescente (para números), coloca na ordem de A à Z (para letras)
        krsort() => coloca as CHAVES em ordem decrescente (para números), coloca na ordem de Z à A (para letras)
    */

    $array = [
        "Daniel" => 17,
        "Heitor" => 18,
        "Sérgio" => 19,
        "Nicolas" => 19,
        "Maria" => 14,
        "Paula" => 10,
        "José" => 48
    ];

    #ORDENANDO OS VALORES DO ARRAY ASSOCIATIVO:

    //Ordenando os valores do array associativo em ordem crescente
    asort($array);

    //Array ( [Paula] => 10 [Maria] => 14 [Daniel] => 17 [Heitor] => 18 [Sérgio] => 19 [Nicolas] => 19 [José] => 48 )
    print_r($array);

    echo "<br>";
    
    //Ordenando os valores do array associativo em ordem decrescente
    arsort($array);

    //Array ( [José] => 48 [Sérgio] => 19 [Nicolas] => 19 [Heitor] => 18 [Daniel] => 17 [Maria] => 14 [Paula] => 10 )
    print_r($array);

    echo "<br>";

    #ORDENANDO AS CHAVES DO ARRAY ASSOCIATIVO:

    //Ordenando as chaves do array em ordem alfabética, de A à Z
    ksort($array);

    //Array ( [Daniel] => 17 [Heitor] => 18 [José] => 48 [Maria] => 14 [Nicolas] => 19 [Paula] => 10 [Sérgio] => 19 )
    print_r($array);

    //Ordenando aschaves do array em ordem alfabética, de maneira inversa, de Z à A
    krsort($array);