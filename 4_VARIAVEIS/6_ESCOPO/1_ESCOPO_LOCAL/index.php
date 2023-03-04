<?php

    $name = "CARLOS DANIEL ROSENO DE LIMA";

    function myName()
    {
        $name = "Carlos Daniel Roseno de Lima";

        echo $name;
    }

    echo "$name <br>";

    echo myName();

    /* 
        OBS: Mesmo tendo duas variáveis com o mesmo nome, não causa interferência, pois uma está sendo declara dentro do escopo da função,
        logo ela não interfere do valor da que está sendo declara fora do escopo da função!
    */