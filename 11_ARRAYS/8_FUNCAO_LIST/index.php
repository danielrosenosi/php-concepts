<?php
    //Com a função list, podemos atribuir cada dado do array à uma variávelm, em sequência!

    $user = [
        "Matheus",
        17,
        "Pacajus"
    ]; 
    
    //Atente-se a ordem passada, pois o valor de cada variável será atribuído na mesma ordem dos dados do array
    list($name, $age, $city) = $user; 

    echo $name . "<br>"; //Matheus
    echo $age . "<br>"; //17
    echo $city . "<br>"; //Pacajus