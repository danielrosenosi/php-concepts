<?php

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    //Utilizando o foreach
    foreach($array as $key) {
        if($key % 2 === 0) {
            echo "$key é par <br>";
        }
    }

    echo "<br>";

    //Utilizando o for
    for($i = 0; $i < count($array); $i++) {
        if($i % 2 === 0) {
            echo "$i é par <br>";
        }
    }