<?php
    
    /*
        Função que não recebe parâmetros, quando chamada executa o que está no seu interior,
        sem a necessidade de parâmetros para executar a lógica
    */

    function test() {
        echo "Testando funções" . "<br>";        
    }

    /*
        Função que recebe parâmetros, quando chamada executa o que está no seu interior
        e recebe os parâmetros para executar a lógica
    */

    function testTwo($name, $age) {
        echo "Olá, eu me chamo $name, e tenho $age anos" . "<br>";
    }

    $name = "Daniel";
    $age = 17;

    echo test();
    echo testTwo($name, $age);
