<?php
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Roseno</title>

    <!-- CSS STYLES -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/styles.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?php $BASE_URL ?>" id="logo">
            <img src="<?php $BASE_URL ?>assets/images/logo.svg" alt="Dev Roseno">
        </a>

        <nav>
            <ul id="navbar">
                <li>
                    <a href="<?php $BASE_URL ?>index.php" class="nav-link">Início</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Categorias</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="<?php $BASE_URL ?>contact.php" class="nav-link">Contato</a>
                </li>
            </ul>
        </nav>
    </header>