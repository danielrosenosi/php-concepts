<?php

    /*
        EXISTE UMA CARACTERÍSTICA DO FOREACH, QUE SÓ FUNCIONA COM ARRAYS ASSOCIATIVOS...

        VOCÊ CONSEGUE ACESSAR A CHAVE CORRESPONDENTE HÁ AQUELE VALOR
        
        EXEMPLO ABAIXO:
    */

    $car = [
        "Cor" => "Azul",
        "Motor" => 2.0,
        "Velocidade Máxima" => 100,
        "Marca" => "Ford"
    ];

    foreach($car as $key => $value) {
        echo "{$key}: $value <br>";
    }

    /*
        RESULTADO:

        Cor: Azul
        Motor: 2
        Velocidade Máxima: 100
        Marca: Ford

        dessa forma, temos acesso tanto à chave/key, quanto temos acesso ao value/valor daquela key
    */