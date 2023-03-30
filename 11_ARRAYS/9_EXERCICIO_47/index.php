<?php

    $car = [
        "jaguar",
        3.0,
        "azul",
        18,
        "teto solar",
        "automático"
    ];

    // Criando as variáveis a partir dos dados do array $car
    list($carName, $carEngine, $carColor, $carRim, $carTet, $carExchange) = $car;

?>
    <!-- Imprimindo os dados das variáveis criadas -->

    <h1><?= ucfirst($carName) ?></h1>

    <li>Motor: <?= $carEngine . ".0" ?></li>
    <li>Cor: <?= $carColor ?></li>
    <li>Aro: <?= $carRim ?></li>
    <li>Teto: <?= $carTet ?></li>
    <li>Câmbio: <?= $carExchange ?></li>