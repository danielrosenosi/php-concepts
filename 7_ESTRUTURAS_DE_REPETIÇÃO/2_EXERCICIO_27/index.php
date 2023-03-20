<?php

    $array = [1, 2, 3.1, true, [], 'teste', 'daniel', 3.14, 4, 5, 6, 7, 8, 9];

    while($array) {
        $arrayValue = array_pop($array);

        if(is_string($arrayValue)) {
            echo $arrayValue . '<br>';
        }
    }