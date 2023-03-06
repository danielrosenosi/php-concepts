<?php

    $numberOne = 1;
    $stringOne = "1";

    if($numberOne !== $stringOne) {
        echo "É DIFERENTE"; // esse é o resultado da condição, pois o operador não idêntico compara o tipo e valor
    } else {
        echo "NÃO É DIFERENTE";
    }