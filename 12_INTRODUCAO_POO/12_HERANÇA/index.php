<?php

    class Human {
        public $age = 17;
        protected $name = "Carlos";

        public function speak() {
            echo "Olá mundo!" . "<br>";
        }

        private function shouting($phrase) {
            echo $phrase. "<br>";
        }

        public function getShouting($phrase = "ESTOU GRITANDO") {
            return $this->shouting($phrase);
        }
    }

    //A class Dev, recebe todo o conteúdo da class Human
    class Dev extends Human {
        public function myName() {
            echo $this->name;
        }
    }

    $daniel = new Human;

    $daniel->speak();

    $carlos = new Dev;

    echo $carlos->age . "<br>"; //Imprimindo uma propriedade que está na class Human, que foi traga para a class Dev!

    $carlos->getShouting();
    $carlos->getShouting("AAAAAAA");

    $carlos->myName();