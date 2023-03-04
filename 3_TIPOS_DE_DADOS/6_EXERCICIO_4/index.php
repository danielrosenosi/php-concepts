<?php

    $numbers = [1, 2, 3, 1.1, 1.2, -1.3]; //floats podem ser negativos

    foreach ($numbers as $number) {
        if(is_float($number)) {
            echo "$number é float <br>";
        } else {
            echo "$number não é float <br>";
        }
    }