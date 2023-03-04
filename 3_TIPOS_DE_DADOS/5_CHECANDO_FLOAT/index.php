<?php

    $numbers = [1, 1.10, 2, 2.10];

    foreach ($numbers as $number) {
        if(is_float($number)) {
            echo "$number é float";
            echo "<br>";
        } else {
            echo "$number não é float";
            echo "<br>";
        }
    }