<?php

    function checksIfItIsEvenOrOdd($number) {
        if($number % 2 === 0) {
            return true;
        } else {
            return false;
        }
    }

    $value = 24;

    if(checksIfItIsEvenOrOdd($value)) {
        echo "Ok, o número é par";
    } else {
        echo "Por favor, forneca um numero par";
    }