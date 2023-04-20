<?php

    interface Features {
        const name = "Carlos";

        public function speak();
    }

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