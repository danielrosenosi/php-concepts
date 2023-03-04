<?php

    function testeStatic() //Utilizando static na variável, ele mantém o último valor da variável de acordo com suas chamadas
    {
        static $a = 0;
        $a++; //Adiciona sempre +1

        echo "$a <br>";
    }

    testeStatic(); //Retorna 1
    testeStatic(); //Retorna 2
    testeStatic(); //Retorna 3