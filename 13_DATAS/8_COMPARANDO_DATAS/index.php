<?php

    $dateA = new DateTime();
    $dateB = new DateTime();
    $dateC = new DateTime();

    $dateB->setDate(2024, 10, 10);

    if($dateA > $dateB) {
        echo "A data A é maior que a data B" . "<br>";
    } else {
        echo "A data A é menor que a data B" . "<br>"; //Caiu nessa condição
    }

    if($dateA->format('d/m/y') == $dateC->format('d/m/y')) {
        echo "A data A e C são iguais";
    }