<?php
    session_start();

    print_r($_SESSION);

    $_SESSION['name'] = "Matheus";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Olá, <?= $_SESSION['name'] ?> </h1>
</body>
</html>