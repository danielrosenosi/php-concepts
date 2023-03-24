<?php

    function setCarColor($color = "Vermelha") {
        return "A cor do carro é: {$color}";
    }

    echo setCarColor(); //Vermelha, pois não passei parâmetro, então ela retorna o valor default
    
    echo "<br>";

    echo setCarColor("Azul"); //Azul, pois passei Azul como parâmetro, de forma HARDCODED

    echo "<br>";

    $testColor = "Amarelo";
    echo setCarColor($testColor); //Amarelo, pois a variável $testColor está guardando a string Amarelo