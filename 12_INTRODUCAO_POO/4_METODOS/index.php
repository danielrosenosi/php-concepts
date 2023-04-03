<?php

    class Person {
        function me($name) {
            echo "Olá, meu nome é {$name}" . "<br>";
        }

        function sum($x, $y) {
            echo $x + $y . "<br>";
        }
    }

    $daniel = new Person; //Instanciando a class Person na variável $daniel

    $daniel->me("Daniel"); //Chamando o método me() na class Person
    $daniel->sum(2, 2); //Chamando o método sum() na class Person

    $maria = new Person; //Instanciando a class Person na variável $maria

    $maria->me("Maria"); //Chamando o método me() na class Person
    $maria->sum(10, 10); //Chamando o método sum() na class Person