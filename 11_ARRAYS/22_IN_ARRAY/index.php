<?php
    // Com o in_array(), podemos buscar se existe determinado dado em um array
    
    $arrayAssociative = [
        "name" => "Carlos Daniel",
        "age" => 17,
        "city" => "Pacajus"
    ];

    echo in_array("Pacajus", $arrayAssociative); //TRUE
    echo in_array("Fortaleza", $arrayAssociative); //FALSE

    echo "<br>";

    if(in_array(17, $arrayAssociative)) {
        echo "O usuário digitou a idade como 17";
    }

