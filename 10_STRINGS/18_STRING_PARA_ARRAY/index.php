<?php

    $str = "Primeiro segundo terceiro quarto quinto sexto sétimo oitavo nono décimo";

    strtolower($str); // retorna "primeiro segundo terceiro quarto quinto sexto sétimo oitavo nono décimo"

    $arrayGenerate = explode(" ", $str); // retorna um array com cada palavra da string como um elemento do array

    print_r($arrayGenerate); // Array ( [0] => Primeiro [1] => segundo [2] => terceiro [3] => quarto [4] => quinto [5] => sexto [6] => sétimo [7] => oitavo [8] => nono [9] => décimo )