<?php

    class Car {

        public $wheels = 4;
        public $glass = "Sem fumê";
        
        private $color = "Vermelho";

        public function getColor() {
            return $this->color;
        }

        public function alterColor($newColor) {
            return $this->color = $newColor;
        }
    }

    class Mechanic {

        public function alterWheels($car) {
            $car->wheels = 10;
        }

        public function addingFilm($car, $type) {
            $car->glass = $type;
        }
    }

    $car = new Car;

    echo $car->wheels . "<br>"; //4

    $daniel = new Mechanic;

    $daniel->alterWheels($car);

    echo $car->wheels . "<br>"; //10

    $daniel->addingFilm($car, "G20");

    echo $car->glass . "<br>"; //G20

    echo $car->getColor() . "<br>"; //Vermelho

    echo $car->alterColor("Azul"); //Não retorna um erro, pois o método alterColor está acesando a propriedade color e alterando dela para AZUL, dentro da sua class pai

    echo $car->color . "<br>"; //Retorna um erro, pois a propriedade só pode ser acessada diretamente dentro da class