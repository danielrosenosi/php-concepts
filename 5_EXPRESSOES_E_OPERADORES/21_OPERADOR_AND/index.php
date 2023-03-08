<?php

    // and = && (ambos devem ser verdadeiros)

    if(10 < 20 && 5 < 10) { // true e true = true
        echo "Verdadeiro"; //true
    } else {
        echo "Falso"; //false
    }

    echo "<br>";

    if(10 < 20 && 5 > 10) { // true e false = false
        echo "Verdadeiro"; //true
    } else {
        echo "Falso"; //false
    }