<?php

    if(12 < 5 || "João" === "João") { // false ou true = true
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    echo "<br>";

    if(1 > 5 || 1) { // false ou true = true
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    echo "<br>";

    if(20 === "20" && 51 >= 31) { // false e true = false
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }