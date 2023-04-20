<?php

    class Car {

        public $doors;
        public $color;
        public $brand;

        function __construct($doors, $color, $brand)
        {
            $this->doors = $doors;
            $this->color = $color;
            $this->brand = $brand;
        }

    }

    $golBolinha = new Car(4, "Vermelha", "Volkswagen");

    echo "O carro é da marca {$golBolinha->brand} e tem a cor {$golBolinha->color}";