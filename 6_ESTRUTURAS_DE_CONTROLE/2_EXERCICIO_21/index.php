<?php

    $data = [
        ["name" => "Daniel", "age" => 17],
        ["name" => "Gabriel", "age" => 21]
    ];

    foreach($data as $user) {
        if ($user["age"] >= 18) {
            echo $user["name"] . " é maior de idade <br>";
        } else {
            echo $user["name"] . " é menor de idade <br>";
        }
    }