<?php

    function checkItemValue($itens) {
        $arrGreaterThan = [];

        foreach($itens as $item => $preco) {
            if($preco > 10) {
                array_push($arrGreaterThan, $item);
            }
        }

        return implode(", ", $arrGreaterThan);
    }

    $arr = [
        "Caneta" => 10,
        "Lápis" => 11,
        "Borracha" => 11
    ];

    echo checkItemValue($arr) . " são mais caros que R$10";