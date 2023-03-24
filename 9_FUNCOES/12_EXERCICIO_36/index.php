<?php

    function returnsArrayWithGreaterThanSeven($array) {
        $newArray = [];

        foreach($array as $item) {
            if($item > 7) {
                array_push($newArray, $item);
            }
        }

        return implode(", ", $newArray);
    }

    $ages = [];

    for($index = 0; $index <= 10; $index++) {
        array_push($ages, $index);
    }

    echo returnsArrayWithGreaterThanSeven($ages);