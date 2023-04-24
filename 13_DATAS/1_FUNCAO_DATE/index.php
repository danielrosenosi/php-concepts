<?php

    $today = date('d/m/y'); // day / month / year

    echo $today . "<br>"; // Data de hoje (24/04/23)

    $todayCustom = date('d, M - Y'); 

    echo $todayCustom . "<br>"; // 24, Apr - 2023

    $todayYearWithoutAbbreviation= date('d/m/Y');

    echo $todayYearWithoutAbbreviation; //24/04/2023