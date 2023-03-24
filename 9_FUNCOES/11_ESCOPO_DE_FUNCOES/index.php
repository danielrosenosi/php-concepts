<?php

    
    $a = 10;
    $b = 12;

    function testScope() {
        $a = 5; //TESTANDO ESCOPO LOCAL

        global $b; //ESTOU DIZENDO QUE VOU ALTERAR A VARIÁVEL $b EM UM ESCOPO GLOBAL (EM TODO O PROGAMA)
        $b = 1; // $b que antes era 12, vai passar a ser 1

        static $c;
        $c = 0;
        $c++; //Vai aumentar 1, a cada chamada de função, pois o estatic pega o valor da última alteração

        echo "ESCOPO LOCAL NA FUNÇÃO DE A: $a <br>"; //Vai retornar 5
        echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";
        echo "ESCOPO STATIC NA FUNÇÃO DE C: $c <br>"; //Vai 
    }
    
    
    testScope(); // Vai retornar 5, pois a variável $a que está sendo impressa, está recebendo 5, dentro da função
    
    echo "ESCOPO LOCAL DE A: $a <br>"; //Vai imprimir 10, porque por mais que dentro da função ele receba 5 como seu valor, foi apenas no escopo local da função, e não se aplica ao escopo global
    echo "ESCOPO GLOBAL DE B: $b <br>"; //Vai imprimir 1, pois a variável foi alterada de forma GLOBAL dentro da função

    testScope();