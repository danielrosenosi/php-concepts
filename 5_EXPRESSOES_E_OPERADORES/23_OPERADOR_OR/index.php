<?php

    //Se apenas um dos lados for true, toda operação será true
    if(5 > 15 || "teste" == "teste") { // false ou true = true
        echo "True";
    } else {
        echo "False";
    }

    echo "<br>";

    if(5  > 15 || "TESTE" == "teste") { // false ou false = false
        echo "True";
    } else {
        echo "False";
    }

    echo "<br>";

    if((15 > 16 || 2 === 2) && 4 < 5) { // (false ou true = true) e true = true
        echo "True";
    } else {
        echo "False";
    }

    echo "<br>";

    if((15 > 20 && 2 === 2) || 4 < 5) { // (false e false = false) ou true = true
        echo "True";
    } else {
        echo "False";
    }