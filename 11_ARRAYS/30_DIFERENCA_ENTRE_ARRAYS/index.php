<?php

    //O que há em comum nesses dois array, é apenas o elemento 2, logo ele não aparecerá quando usar o diff
    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];

    $diffFromArrayOneToTwo = array_diff($arr1, $arr2); //Diferença do array um para o dois

    print_r($diffFromArrayOneToTwo); //Array ( [0] => 1 [2] => 3 )
    echo "<br>"; 

    $diffFromArrayTwoToOne = array_diff($arr2, $arr1); //Diferença do array dois para o um
    
    print_r($diffFromArrayTwoToOne); //Array ( [1] => 4 [2] => 6 )