<?php

    function calculateBmi($weight, $height) {
        $bmi = $weight / ($height * $height);

        echo "Seu IMC é de {$bmi}";
    }

    calculateBmi(80, 1.80);