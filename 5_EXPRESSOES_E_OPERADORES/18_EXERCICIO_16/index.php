<?php

    $numberOne = 5;
    $numberTwo = 3;

    if($numberOne == $numberTwo) {
        echo "É IGUAL";
    } else {
        echo "NÃO É IGUAL";
    }

    echo "<br>";

    if($numberOne != $numberTwo) {
        echo "É DIFERENTE";
    } else {
        echo "NÃO É DIFERENTE";
    }

    echo "<br>";

    if($numberOne === $numberOne) {
        echo "É IDÊNTICO";
    } else {
        echo "NÃO É IDÊNTICO";
    }

    echo "<br>";

    if($numberOne !== $numberTwo) {
        echo "NÃO SÃO IDÊNTICOS";
    } else {
        echo "É IDÊNTICO";
    }