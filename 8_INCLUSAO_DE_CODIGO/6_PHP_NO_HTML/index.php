<?php
    include_once 'backend.php';
?>

<header>
    <h1>Seja bem-vindo, <?= $name ?></h1>
    <p>Email: <?= $email ?></p>
</header>

<body>
    <h2>Seus produtos</h2>
    
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?= $product ?></li>
        <?php endforeach; ?>
    </ul>
</body>