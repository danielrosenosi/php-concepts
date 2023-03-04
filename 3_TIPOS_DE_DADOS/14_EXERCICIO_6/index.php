<?php

    $carDescription = [
        "model" => "SUV",
        "color" => "vermelho",
        "maximumSpeed" => 100,
        "quality" => "boa"
    ];

    echo $carDescription["model"];
    echo "<br>";

    echo $carDescription["color"];
    echo "<br>";

    echo $carDescription["maximumSpeed"];
    echo "<br>";

    if($carDescription["quality"] === "boa") {
        echo "A qualidade do carro é boa";
    }