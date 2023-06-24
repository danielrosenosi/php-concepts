<?php
    setcookie("name", "Carlos Daniel", time() + 3600);

    if(isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Olá, essa é a pagina de login</h1>

    <?php if(isset($name)): ?>
        <?= header("Location: http://localhost:8080/php-concepts/14_PHP_WEB/9_COOKIES/home.php") ?>
    <?php endif; ?>
</body>
</html>