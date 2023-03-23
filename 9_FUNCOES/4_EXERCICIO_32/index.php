<?php

    function multiplyNumbersWithoutParameters() {
        $valueOne = 2;
        $valueTwo = 4;
        $valueThree = 5;

        $multiplyNumbers = $valueOne * $valueTwo * $valueThree;

        echo "O resultado da multiplicação é: $multiplyNumbers";
    }

    function multiplyNumbersWithParameters($valueOne, $valueTwo, $valueThree) {
        $multiplyNumbers = $valueOne * $valueTwo * $valueThree;

        echo "O resultado da multiplicação é: $multiplyNumbers";
    }

    multiplyNumbersWithoutParameters();

    echo "<br>";

    multiplyNumbersWithParameters(2, 4, 5);