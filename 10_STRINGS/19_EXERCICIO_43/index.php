<?php

    $str = "carro - navio - helicóptero - barco - jangada";

    $arrayOfTransports = explode(" - ", $str);

    print_r($arrayOfTransports);

    echo "<br>";

    foreach($arrayOfTransports as $transport) {
        echo "O transporte é: " . ucfirst($transport) . "<br>";
    }