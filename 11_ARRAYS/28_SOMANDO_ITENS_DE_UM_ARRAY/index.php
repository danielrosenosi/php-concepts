<?php
    
    $array = [2, 4, 6, "Carlos"]; //2 + 4 + 6 = 12

    $sumArray = array_sum($array); //Só vai somar o que for número, logo a string é ignorada e não gera nenhum erro

    echo $sumArray; //12