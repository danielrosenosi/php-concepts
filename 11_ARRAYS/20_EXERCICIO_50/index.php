<?php

    $array = [
        "Carlos" => 17,
        "Maria" => 19,
        "José" => 20,
        "Eduardo" => 30,
        "Heitor" => 18,
        "Sérgio" => 20
    ];

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 50</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>
        <div class="d-flex justify-content-center">
            <div class="col-lg-8 mt-5">
                <table class="table table-hover border">
                    <thead>
                        <th class="col">Nome</th>   
                        <th class="col">Idade</th>
                    </thead>
                    <tbody>
                        <?php foreach($array as $key => $value): ?>
                            <tr>
                                <td> <?= $key ?></td>
                                <td> <?= $value ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>