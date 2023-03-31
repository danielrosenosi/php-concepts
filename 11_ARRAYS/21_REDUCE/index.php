<?php

    $array = [1, 2, 3, 4, 5];

    function sum($a, $b) {
        return $a + $b;
    }

    $resultSum = array_reduce($array, "sum");

    echo $resultSum; //15