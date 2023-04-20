<?php

    class Human {
        public const EYES = 2;
        public const ARMS = 2;
        public const LEGS = 2;

        //ACESSAR CONST EM UM MÉTODO
        function showConst() {
            echo self::EYES . " olhos (acessando no método)" . "<br>";
        }
    }

    $carlos = new Human;

    echo $carlos::EYES . " olhos" . "<br>";
    echo $carlos::ARMS . " braços" . "<br>";
    echo $carlos::LEGS . " pernas" . "<br>";

    echo $carlos->showConst();
