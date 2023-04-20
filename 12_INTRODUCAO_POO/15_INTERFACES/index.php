<?php

    //TUDO QUE ESTIVER AQUI, TEM QUE ESTAR NA CLASS EM QUE A INTERFACE FOR IMPLEMENTADA
    interface Features {
        const name = "Carlos";

        public function speak();
    }

    //TUDO QUE ESTÁ NA INTERFACE FEATURES, VAI TER QUE ESTAR NESSA CLASS HUMAN, SE NÃO, O PHP RECLAMA
    class Human implements Features {
        public $age = 29;

        public function speak() {
            echo "Humano falando" . "<br>";
        }

        public function myName() {
            echo "Meu nome é " . self::name . "<br>";
        }
    }

    $carlos = new Human;

    $carlos->speak(); //Humano falando
    $carlos->myName(); //Meu nome é Carlos