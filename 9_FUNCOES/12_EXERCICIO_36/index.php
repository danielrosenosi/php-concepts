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

    $values = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    echo returnsArrayWithGreaterThanSeven($values);