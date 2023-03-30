<?php

    $ages = range(10, 45);

    foreach($ages as $age) {
        $age += 6;

        if($age > 30) {
            echo "O número {$age} é maior que 30" . "<br>";
        } else {
            echo $age . "<br>";
        }
    }