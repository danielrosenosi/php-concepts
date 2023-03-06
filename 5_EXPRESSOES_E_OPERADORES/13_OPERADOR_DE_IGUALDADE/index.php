<?php

    $nameUserFromBd = "devroseno";
    $nameUserEntered = "devroseno ";

    if($nameUserFromBd == $nameUserEntered){
        echo "Usuário logado com sucesso!";
    } else {
        echo "Usuário inválido!";
        /* esse é o resultado da condição, pois o espaço em branco no final do nome do usuário é considerado
        como um caracter, logo são diferentes */
    }