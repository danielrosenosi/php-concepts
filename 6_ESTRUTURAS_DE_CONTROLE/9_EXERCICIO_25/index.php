<?php

    $name = "João";
    $age = 18;

    if(is_int($name)) {
        $ageDouble = $name * 2;

        if($ageDouble > 100) {
            echo "Você já pode se aposentar!";
        } else {
            echo "Você ainda não pode se aposentar!";
        }
    } else {
        echo "Informe uma idade válida!";
    }

    echo "<br>";

    if(is_int($age)) {
        $ageDouble = $age * 2;

        if($ageDouble > 100) {
            echo "Você já pode se aposentar!";
        } else {
            echo "Você ainda não pode se aposentar!";
        }
    } else {
        echo "Informe uma idade válida!";
    }