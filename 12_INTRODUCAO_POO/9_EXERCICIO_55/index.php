<?php

    class Car {
        
        public $brand;
        public $color;
        public $fullSpeed;

        function setFullSpeed($fullSpeedValue) {
            $this->fullSpeed = $fullSpeedValue;
        }

        function getFullSpeed($brand, $color, $fullSpeedValue) {
            return "O carro da marca {$brand} e da cor {$color} atinge a velocidade máxima de {$fullSpeedValue}km";
        }
    }

    $carFeatures = new Car;

    $carFeatures->setFullSpeed(120); // Setando a velocidade máxima do carro para a variável fullspeed, utilizando a função setFullSpeed que foi criada na class
    
    echo $carFeatures->fullSpeed . "<br>"; //Imprimindo a velocidade máxima (120)

    $carFeatures->fullSpeed = 400; // Setando novamente a velocidade máxima do carro para a variável fullspeed, porém da maneira correta, sem criar uma função para isso na class

    echo $carFeatures->fullSpeed . "<br>"; //Imprimindo a velocidade máxima (400)

    echo $carFeatures->getFullSpeed("Ford", "azul", $carFeatures->fullSpeed) . "<br>";

    echo $carFeatures->getFullSpeed("BMW", "branca", "300") . "<br>";