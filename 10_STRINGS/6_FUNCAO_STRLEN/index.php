<?php

    $nameOne = "Carlos";
    $nameTwo = "Carlos ";

    echo strlen($nameOne) . "<br>"; //6 caracteres

    echo strlen($nameTwo) . "<br>"; //Imprimiu 7 caracteres, pois o espaço também é um caractere

    if(strLen($nameOne) > strlen($nameTwo))  {
        echo "A string um é maior que o nome dois";
    } else {
        echo "A string dois é maior que o nome um";
    }