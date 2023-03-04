<?php

    $name = "Carlos";

    echo "$name (global 1) <br>";

    if(1 > 0) { //Altera a variável de escopo global sim
        $name = "Carlos Daniel";

        echo "$name (if) <br>";
    }

    echo "$name (global 2) <br>";

    function naoAlteraValorDaVariavelGlobal() //Não altera (altera somente se especificarmos que a variável é global) variável de escopo global
    {
        $name = "Carlos Daniel Roseno";

        echo "$name (function) <br>";
    }

    echo naoAlteraValorDaVariavelGlobal();

    function alterandoVariavelGlobal()
    {
        global $name;

        $name = "ALTERANDO O VALOR";

        echo "$name (function alterando valor) <br>";
    }

    echo alterandoVariavelGlobal();

    echo "$name (global 3)";
