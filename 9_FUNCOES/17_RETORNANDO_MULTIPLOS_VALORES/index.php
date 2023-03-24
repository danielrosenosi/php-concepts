<?php

    function sumAndSubtraction($numberOne, $numberTwo) {
        $sum = $numberOne + $numberTwo;
        $sub = $numberOne - $numberTwo;

        return ["soma" => $sum, "subtracao" => $sub];
    }

    $valueOne = 4;
    $valueTwo = 3;

    print_r(sumAndSubtraction(4, 8)); // Array ( [soma] => 12 [subtracao] => -4 )
    echo "<br>";

    echo sumAndSubtraction(4,8)['soma']; // 12
    echo "<br>";

    echo sumAndSubtraction(4, 8)['subtracao']; // -4