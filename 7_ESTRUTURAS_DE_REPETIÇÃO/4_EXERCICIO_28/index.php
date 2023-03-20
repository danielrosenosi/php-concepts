<?php

    $numberInitial = 4;
    $numberLimit = 30;

    while($numberInitial < $numberLimit) {
        $numberInitial += 2;
        echo $numberInitial . "<br>";
        
        if($numberInitial === 24) {
            echo "O valor chegou no 24";
            break;
        }
    }