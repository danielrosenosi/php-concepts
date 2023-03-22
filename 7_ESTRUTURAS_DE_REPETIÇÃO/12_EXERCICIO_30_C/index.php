<?php

    $array = [];

    for($i = 10; $i <= 20; $i++) {
        array_push($array, $i);
    }

    foreach($array as $key) {
        if($key % 2 != 0) {
            echo "$key é impar <br>";
        }
    }