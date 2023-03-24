<?php
    
    function checkIfIsEvenOrOdd($number) {
        if($number % 2 == 0) {
            echo "O número $number é par";
        } else {
            echo "O número $number é impar";
        }
    }

    checkIfIsEvenOrOdd(12);

    echo "<br>";
    
    checkIfIsEvenOrOdd(11);
