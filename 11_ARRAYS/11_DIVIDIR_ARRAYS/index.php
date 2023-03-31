<?php

    $array = range(1, 20);
    print_r(array_chunk($array, 4)); //Gerou 5 arrays, cada um com 4 elementos
    
    echo "<br>";
    echo "<br>";
    
    $arrayChunkOne = array_chunk($array, 10); //Gerou dois array, cada um com 10 elementos
    print_r($arrayChunkOne);

    echo "<br>";
    echo "<br>";

    print_r($arrayChunkOne[1]); //Imprimindo o segundo array gerado pelo array_chunk, que vai de 11 até 20 elementos