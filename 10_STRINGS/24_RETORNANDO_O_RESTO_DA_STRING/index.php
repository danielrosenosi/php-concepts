<?php

    //strstr()

    $str = "Carlos Daniel Daniel Roseno de Lima";

    echo strstr($str, "Daniel");
    /*
        Retorna: Daniel Daniel Roseno de Lima, pois ele identifica a primeira ocorrência
        da palavra "Daniel" e trás o resto dessa string, a partir da primeira ocorrência da string buscada
    /*