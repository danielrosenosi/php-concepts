<?php

    class Human {

    }

    class Teacher extends Human {

    }

    class Car {

    }

    $daniel = new Human; //instanciando class Human à variável daniel
    $marcos = new Teacher;
    $bmw = new Car;

    //Verificar se é uma instância de uma class...
    if($daniel instanceof Human) {
        echo "Daniel é um humano" . "<br>";
    }

    //Vai entrar nessa condição, pois na class Teacher, eu estou aplicando o "extends" para a class Human, logo ela agora faz parte da class Teacher
    //E o teacher também se torna human
    if($marcos instanceof Human) {
        echo "Marcos é um humano" . "<br>";
    }

    if($bmw instanceof Human) {
        echo "A bmw é um humano" . "<br>";
    } else {
        echo "A bmw não é um humano" . "<br>"; //Entrou nessa condição!
    }