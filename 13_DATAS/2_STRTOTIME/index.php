<?php

    $fiveDays = strtotime("5 days");

    $todayDateFiveMore = date('d/m/y', $fiveDays); //Daqui há 5 dias

    echo $todayDateFiveMore ."<br>"; //29/04/23

    $fiveMonths = strtotime("5 months");
 
    $todayDateFiveMonths = date('d/m/y', $fiveMonths); //Daqui há 5 meses

    echo $todayDateFiveMonths . "<br>"; //24/09/23

    $fiveYears = strtotime("5 years");

    $todayDateFiveYears = date('d/m/y', $fiveYears); //Daqui há 5 anos

    echo $todayDateFiveYears . "<br>"; //24/04/28