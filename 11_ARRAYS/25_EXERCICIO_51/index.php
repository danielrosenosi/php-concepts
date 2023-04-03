<?php

    $participants = [
        "Júlia" => 13,
        "Sérgio" => 4,
        "Ana" => 1,
        "Eduarda" => 24,
        "Daniel" => 45,
        "Carlos" => 11,
        "Bárbara" => 22
    ];

    //Ordem decrescente
    arsort($participants);
?>

<ol>
    <?php foreach($participants as $person => $score): ?>
        <li><?= $person . ": " . $score ?></li>
    <?php endforeach; ?>
</ol>
