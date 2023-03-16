<?php

    $speedCar = 120;

    if($speedCar < 40) {
        echo "Você está na velocidade correta!";
    } else if ($speedCar == 40) {
        echo "Tome cuidado, você está na velocidade máxima!";
    } else if ($speedCar > 40) {
        echo "Você está acima da velocidade máxima e levou uma multa!";
    }