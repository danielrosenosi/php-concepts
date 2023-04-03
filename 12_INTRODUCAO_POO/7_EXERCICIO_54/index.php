<?php

    class Person {

        public $name;
        public $age;

        function andar($name) {
            echo "{$name} andou" . "<br>";
        }

    }

    //Instanciando
    $daniel = new Person;

    //Atribuindo valores nas propriedades da classe
    $daniel->name = "Carlos Daniel";
    $daniel->age = 17;
    
    //Acessando um método da classe Person
    $daniel->andar($daniel->name);
    
    echo "{$daniel->name} tem {$daniel->age} anos" . "<br>";
    
    //Instanciando
    $heitor = new Person;
    
    //Atribuindo valores nas propriedades da classe
    $heitor->name = "José Heitor";
    $heitor->age = 18;

    //Acessando um método da classe Person
    $heitor->andar($heitor->name);

    echo "{$heitor->name} tem {$heitor->age} anos" . "<br>";