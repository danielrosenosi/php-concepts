<?php

    $users = [
        ["name" => "Daniel", "age" => 17],
        ["name" => "Maciel", "age" => 30],
        ["name" => "Gabriel", "age" => 21],
    ];

    foreach($users as $user) {
        if($user["age"] >= 18) {
            echo $user["name"] . " é maior de idade <br>";
        } else {
            echo $user["name"] . " é menor de idade <br>";
        }
    }