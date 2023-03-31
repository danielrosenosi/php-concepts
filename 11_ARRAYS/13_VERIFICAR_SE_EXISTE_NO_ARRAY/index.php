<?php

    /*
        Observações: EXISTEM DUAS FORMAS DE VERIFICAR SE EXISTE UMA CHAVE EM UM ARRAY

        PRIMEIRA FORMA: isset("chave que vai ser buscada", $array_onde_vai_ser_buscado)
        SEGUNDA FORMA: array_key_exists("chave que vai ser buscada", $array_onde_vai_ser_buscado)
    */

    $userOne = [
        "name" => "Carlos Daniel",
        "age" => 17
    ];

    $userTwo = [
        "age" => 22
    ];

    //ESSA FORMA (COM O isset()) é a mais recomendada, utilize esta!
    if(isset($userOne["name"]) && isset($userOne["age"])) {
        echo "A chave existe" . "<br>";
    } else {
        echo "A chave não existe" . "<br>";
    }

    if(array_key_exists("name", $userTwo) && array_key_exists("age", $userTwo)) {
        echo "A chave existe" . "<br>";
    } else {
        echo "A chave não existe" . "<br>";
    }