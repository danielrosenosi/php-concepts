<?php

    class Dog
    {
        
        public $name;
        public $race;
        public $age;

        public function __construct($name, $race, $age)
        {
            $this->name = $name;
            $this->race = $race;
            $this->age = $age;
        }

        public function introducingDog()
        {
            echo "O cachorro {$this->name}, da raça {$this->race}, possui {$this->age} anos de idade!";
        }
    }

    $myDog = new Dog("Scoobdoo", "vira-lata", 9);

    $myDog->introducingDog(); //O cachorro Scoobdoo, da raça vira-lata, possui 9 anos de idade!