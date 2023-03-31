<?php

    $urlWithScheme = "https://www.google.com";
    $urlWithoutScheme = "www.google.com";

    $arrayUrlWithScheme = parse_url($urlWithScheme);
    $arrayUrlWithoutScheme = parse_url($urlWithoutScheme);

    print_r($arrayUrlWithScheme); // Array ( [scheme] => https [host] => www.google.com )
    echo "<br>";

    print_r($arrayUrlWithoutScheme); // Array ( [path] => www.google.com )
    echo "<br>";
    
    if($arrayUrlWithScheme["scheme"]) {
        echo "A url possui um scheme {$arrayUrlWithScheme['scheme']}";
    }