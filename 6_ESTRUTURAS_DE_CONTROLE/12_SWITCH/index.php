<?php

    $value = 1;

    switch($value) {
        case 0:
            echo "O valor é igual a 0";
            break;
        case 1:
            echo "O valor é igual a 1";
            break;
        default:
            echo "O valor é diferente de 0 e 1";
    }

    echo "<br>";

    $name = "João";

    switch($name) {
        case "Daniel":
            echo "O nome é Daniel";
            break;
        case "Gabriel":
            echo "O nome é Gabriel";
            break;
        default:
            echo "O nome não é Daniel nem Gabriel";
    }