<?php
    //Percorrer a string e imprimir o número de letras "a" presentes na string

    $str = "O rato roeu a roupa do rei de Roma"; // 4 letras a
    $numberOfLettersA = 0;

    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] === "a") {
            $numberOfLettersA++;
        }
    }

    echo "existem $numberOfLettersA letras a na string";