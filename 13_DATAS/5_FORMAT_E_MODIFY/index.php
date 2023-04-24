<?php

    //Data atual
    $today = new DateTime();

    /* FORMAT */
    echo $today->format('d/m/y') . "<br>"; //24/04/23
    echo $today->format('D/M/Y') . "<br>"; //Mon/Apr/2023
    echo $today->format('d/M/Y') . "<br>"; //24/Apr/2023

    /* MODIFY */

    //Adicionando 5 dias à data atual
    $today->modify("+5 days");

    echo $today->format('d/m/y'); //29/04/23