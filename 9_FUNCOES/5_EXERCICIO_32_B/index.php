<?php

    function printFullNameWithoutParameters() {
        $firstName = "Carlos";
        $lastName = "Daniel";

        echo $firstName . " " . $lastName;
    }
    
    function printFullNameWithParameters($firstName, $lastName) {
        echo $firstName . " " . $lastName;
    }
    
    printFullNameWithoutParameters();

    echo "<br>";

    printFullNameWithParameters("Carlos", "Daniel");
