<?php

    $userCharacteristics = [
        "name" => "Carlos",
        "age" => 17,
        "nationality" => "brasileiro",
        "profession" => "desenvolvedor web"
    ];

    $userName = $userCharacteristics["name"];

    if($userCharacteristics["age"] >= 18) {
        echo "O usuário $userName é maior de idade";
    } else {
        echo "O usuário $userName é menor de idade";
    }