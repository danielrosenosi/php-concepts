<?php

    class Dog {
        function latir($name) {
            echo "O cachorro {$name} latiu" . "<br>";
        }

        function andar($name, $distance) {
            echo "O cachorro {$name} andou {$distance} metros" . "<br>";
        }
    }

    $scobdoo = new Dog;
    $viraLata = new Dog;

    $scobdoo->latir("Scoobdoo");
    $scobdoo->andar("Scoobdoo", 10);

    $viraLata->latir("Vira Lata");
    $viraLata->andar("Vira Lata", 300);