<?php

    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $i = 0;

    while($i < count($array)) {
        $currentNumber = $array[$i];

        if($currentNumber === 30 || $currentNumber === 40) {
            $i++;

            continue;
        }
        
        echo $currentNumber . "<br>";

        $i++;
    }