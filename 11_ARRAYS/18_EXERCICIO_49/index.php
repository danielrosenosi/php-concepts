<?php
    //CRIE VARIÁVEIS COM CARACTERÍSTICAS DE UM ANIMAL E CRIE UM ARRAY ASSOCIATIVO COM O COMPACT, COM TODAS ELAS
    //APÓS ISSO, FAÇA UM LOOP E IMPRIMA OS VALORES DESSE ARRAY
    $name = "Jack";
    $color = "Marrom";
    $race = "Labrador";
    $age = 5;
    
    $featuresDog = compact('name', 'color', 'race', 'age');

    foreach($featuresDog as $feature => $value) {
        echo "{$feature}: {$value} <br>";
    }

    /*  
        RESULTADO:
        
        name: Jack
        color: Marrom
        race: Labrador
        age: 5
    */