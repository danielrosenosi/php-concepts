<?php

    class Car {
        
        //Se eu declaro a varíavel como public aqui dentro da class, eu poderei acessar ela quando tiver um variável instanciando essa class
        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        //Método ligar
        function ligar() {
            echo "Vrummm";
        }

    }

    $ferrari = new Car;

    $ferrari->rodas = 10; //Atribuindo valor 10 à variável $rodas
    echo $ferrari->rodas . "<br>"; //Acessando a variável $rodas que está public dentro da class Car (retornou 10 pois atribuí esse valor acima)

    echo $ferrari->aro . "<br>"; //Acessando a variável $aro que está public dentro da class Car (retornou 20)

    $ferrari->cor = "Azul"; //Acessando a variável $cor que está public dentro da class Car e alterando o valor somente para essa variável $ferrari
    echo $ferrari->cor . "<br>"; //Azul

    echo $ferrari->ligar(); //Vrummm