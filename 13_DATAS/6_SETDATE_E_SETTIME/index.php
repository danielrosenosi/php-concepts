<?php

    $today = new DateTime();

    print_r($today); //DateTime Object ( [date] => 1999-12-01 15:54:26.675691 [timezone_type] => 3 [timezone] => Europe/Berlin )
    echo "<br>";

    $today->setDate(1999, 12, 01); //DateTime Object ( [date] => 1999-12-01 15:54:26.675691 [timezone_type] => 3 [timezone] => Europe/Berlin )

    print_r($today);
    echo "<br>";

    $today->setTime(05, 12, 10); //DateTime Object ( [date] => 1999-12-01 05:12:10.000000 [timezone_type] => 3 [timezone] => Europe/Berlin )

    print_r($today);
    echo "<br>";

    echo $today->format('d/m/y'); //today