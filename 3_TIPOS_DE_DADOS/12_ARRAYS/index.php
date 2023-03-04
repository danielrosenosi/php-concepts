<?php

    //ATENÇÃO: Array é um tipo de dado que pode conter todos os tipos de dados dentro dele, e é passado por [];

    $arrayWithNumbers = [1, 2, 3]; //Array contendo números
    $arrayWithStrings = ["Maçã", "Peira", "Uva"]; //Array contendo strings
    $arrayWithBoolean = [true, false, true]; //Array contendo boleanos

    $arrayWithAllDateTypes = ["Maçã", true, 1, 1.23]; //Array contendo todos os tipos de dados

    print_r($array); //Imprime o array (mostrando seus indices e valores)

    echo "<br>"; //Quebra de linha

    echo $array[2]; //Imprime o terceiro indice do array, que nesse caso é o 3 (o indice inicia em 0,1,2,3...)

    echo "<br>"; //Quebra de linha

    echo $array[0]; //Imprime o primeiro indice do array, que nesse caso é o 1