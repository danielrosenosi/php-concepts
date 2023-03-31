<?php
    /*
        extract(), com essa função podemos transformar todas as chaves do array em variáveis que irão receber
        o valor correspondente há aquela chave dentro do array.

        $array = [
            "fruit" => "Maçã",
            "car" => "BMW
        ];

        extract($array);

        echo $fruit; //Maçã
        echo $car; //BMW

        Como poder ser visto, a chave fruta e car se tornaram variáveis
        Cada uma recebeu o mesmo valor que era associaod há chave, dentro do array

        $fruit recebeu "Maçã" como seu valor
        $car recebeu "BMW" como seu valor
    */

    /*
        Atenção! 

        Se a variável que for criada com extract já existir, o novo valor criado a partir do extract vai substituir o valor que existia!
    */

    $user = [
        "name" => "Carlos Daniel",
        "age" => 17,
        "country" => "Brasil",
        "city" => "Pacajus"
    ];

    extract($user); // Cada chave do array vai virar uma variável, e receber o valor correspondente há aquela chave 

    echo $name . "<br>"; //Carlos Daniel
    echo $age . "<br>"; //17
    echo $country . "<br>"; //Brasil
    echo $city . "<br>"; //Pacajus

    //EXEMPLO SE A VARIÁVEL JÁ EXISTIR:
    $fruit = "Uva";

    $array = [
        "fruit" => "Mamão",
    ];

    extract($array);

    echo $fruit;
    
    /*
        A variável $fruit que antes recebia Uva como seu valor, após a aplicação do extract() passou a receber Mamão
        pois o nome da variável e da chave do array, são idênticos!
    */