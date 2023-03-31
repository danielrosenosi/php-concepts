<?php

    $str = "Isso é uma string";

    echo substr($str, 0, 5); // Isso

    echo "<br>";

    echo substr($str, 5, 2); // é

    echo "<br>";

    echo substr($str, 8); // retorna "uma string", a partir do índice 8 até o final

    echo "<br>";

    echo $str; // retorna "Isso é uma string", a string original não é alterada