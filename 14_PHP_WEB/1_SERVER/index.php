<?php

    print_r($_SERVER);
    echo "<br>";

    if($_SERVER['SERVER_NAME'] === 'localhost') {
        echo "Está acessando via localhost";
    }