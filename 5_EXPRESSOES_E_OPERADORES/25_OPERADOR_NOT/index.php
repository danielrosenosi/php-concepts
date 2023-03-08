<?php

    //O operador NOT inverte o valor boleano, ou seja, se for true, vira false, se for false, vira true
    $name = "João";

    if(!($name === "João")) { // !true = false
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    echo "<br>";

    if(!(2 >= 10)) { // !false = true
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }