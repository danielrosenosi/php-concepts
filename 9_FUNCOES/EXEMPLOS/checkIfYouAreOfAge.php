<?php

    function checkIfYouAreOfAge($age) {
        if($age >= 18) {
            return true;
        } else {
            return false;
        }
    }

    $age = 17;

    if(checkIfYouAreOfAge($age)) {
        echo "Você é maior de idade";
    } else {
        echo "Você é menor de idade";
    }