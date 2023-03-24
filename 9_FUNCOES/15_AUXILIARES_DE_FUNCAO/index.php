<?php

    function sum($numberOne, $numberTwo) {
        // print_r(func_get_args()); // Retorna os argumentos passado para função
        // print_r(func_num_args()); // Retorna a quantidade de argumentos passados

        return $numberOne + $numberTwo;
    }

    sum(2, 5);
    