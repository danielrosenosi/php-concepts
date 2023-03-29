<?php

    $arrayFruits = ['Maça', 'Uva', 'Pera', 'Mamão'];
    $stringFruitsWithoutComma = implode($arrayFruits);
    $stringFruitsWithComma = implode(", ", $arrayFruits);

    $arrayNumbers = [1, 2, 3, 4, 5];
    $stringNumbersWithoutComma = implode($arrayNumbers);
    $stringNumbersWithComma = implode(", ", $arrayNumbers);

    echo implode($arrayFruits); //retornou a string: MaçaUvaPeraMamão
    echo "<br>";

    echo implode(", ", $arrayFruits); //retornou a string: Maça, Uva, Pera, Mamão
    echo "<br>";

    echo implode($arrayNumbers); //retornou a string: 12345
    echo "<br>";

    echo implode(", ", $arrayNumbers); //retornou a string: 1, 2, 3, 4, 5