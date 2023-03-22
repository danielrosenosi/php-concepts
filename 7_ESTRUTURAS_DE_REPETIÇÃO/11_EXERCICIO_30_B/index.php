<?php
    //Criando array através de um loop

    $array = [];

    for($i = 1; $i <= 10; $i++) {
        array_push($array, $i);
    }

    print_r($array);