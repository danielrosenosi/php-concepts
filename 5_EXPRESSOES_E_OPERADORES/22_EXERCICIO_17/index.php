<?php

    $userNameInput = "Jão"; 
    $userNameDataBase = "Jão"; 
    $ageInput = 15;
    $ageDataBase = 5;

    if($ageInput > $ageDataBase && $userNameInput === $userNameDataBase) { // true e true = true
        echo "Dados corretos"; //true
    } else {
        echo "Dados incorretos"; //false
    }

    echo "<br>";

    if("teste" > 5 && 1) {
        echo "Verdadeiro"; //true
    } else {
        echo "Falso"; //false
    }

    echo "<br>";

    if(2 == 3 && 5>=3) { // false e true = false
        echo "Verdadeiro"; //true
    } else {
        echo "Falso"; //false
    }