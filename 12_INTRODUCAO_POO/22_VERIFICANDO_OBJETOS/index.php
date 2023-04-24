<?php

    class Human {
        
        public function Speak()
        {
            echo "Olá";
        }

    }

    $testOne = new Human;
    $testTwo = 10;

    if(is_object($testOne)) {
        echo "É um objeto!" . "<br>"; //Caiu nessa condição
    } else {
        echo "Não é um objeto!" . "<br>";
    }

    if(is_object($testTwo)) {
        echo "É um objeto!" . "<br>";
    } else {
        echo "Não é um objeto!" . "<br>"; //Caiu nessa condição
    }

    echo get_class($testOne) . "<br>"; //Human

    if(method_exists($testOne, "Falar")) {
        echo "O método existe na class " . get_class($testOne) . "<br>";
    } else {
        echo "O método não existe na class " . get_class($testOne) . "<br>";
    }

    if(method_exists($testOne, "Speak")) {
        echo "O método existe na class " . get_class($testOne) . "<br>";
    } else {
        echo "O método não existe na class " . get_class($testOne) . "<br>";
    }