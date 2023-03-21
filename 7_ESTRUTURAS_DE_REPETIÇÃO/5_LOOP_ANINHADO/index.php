<?php

    $valueExternal = 1;

    while($valueExternal <= 10) {
        echo "Loop externo $valueExternal <br>";
        
        $valueInternal = 1;
        
        while($valueInternal <= 5) {
            echo "Loop interno $valueInternal" . "<br>";

            $valueInternal++;
        }

        $valueExternal++;
    }