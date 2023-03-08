<?php

    $value1 = (int) "testando"; // 0
    $value2 = (int) 12.9; // 12
    $value3 = (int) true; // 1
    $value4 = (int) [1,2,3]; // 1

    if(getType($value1) === "integer") {
        echo "$value1 é inteiro <br>";
    } else {
        echo "Não é inteiro <br>";
    }

    if(getType($value2) === "integer") {
        echo "$value2 é inteiro <br>";
    } else {
        echo "Não é inteiro <br>";
    }

    if(getType($value3) === "integer") {
        echo "$value3 é inteiro <br>";
    } else {
        echo "Não é inteiro <br>";
    }

    if(getType($value4) === "integer") {
        echo "$value4 é inteiro <br>";
    } else {
        echo "Não é inteiro <br>";
    }
