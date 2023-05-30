<?php

    if(isset($_GET)) {
        $name = $_GET['name'];
        $age = $_GET['age'];
    } else {
        $name = 'Não informado';
        $age = 'Não informado';
    }
?>

<h1>O seu nome é <?= $name ?>, e você tem <?= $age ?>anos</h1>