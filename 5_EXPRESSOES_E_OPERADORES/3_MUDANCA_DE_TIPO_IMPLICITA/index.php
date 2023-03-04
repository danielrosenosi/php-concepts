<?php

    // O PHP converte automaticamente o valor de uma variável para o tipo de dado que está sendo usado na operação.
    // Por exemplo, se você está usando uma variável numérica em uma operação de concatenação, o PHP converte o valor da variável para uma string.
    // Isso é chamado de conversão de tipo implícita.

    $agePerson1 = 25;
    $agePerson2 = 32;

    if($agePerson1 . $agePerson2) {
        echo "É string <br>";
    } else {
        echo "Não é string <br>";
    }

    if($agePerson1 / $agePerson2) {
        echo "É float <br>";
    } else {
        echo "Não é float <br>";
    }