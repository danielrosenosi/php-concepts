<?php

    $dataOne = new DateTime();
    $dataTwo = new DateTime();

    $dataOne->setDate(2001, 10, 15);
    echo $dataOne->format('d/m/y') . "<br>"; //15/10/01

    $difference = $dataOne->diff($dataTwo);

    print_r($difference);
    echo "<br>";

    echo $difference->format("%a days") . "<br>"; //diferença em dias: 7861 days 
    echo $difference->format("%y years") . "<br>" ; //diferença em anos: 21 years