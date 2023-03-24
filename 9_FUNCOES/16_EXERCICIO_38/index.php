<?php

    function transformingArrayIntoString($array) {
        $result = "Você levou os seguintes itens: " . implode(", ", $array) . ".";

        return $result;
    }

    $itens = ['Arroz', 'Feijão', 'Maça', 'Macarrão', 'Carne de Porco'];
    
    echo transformingArrayIntoString($itens);