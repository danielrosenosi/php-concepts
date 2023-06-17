<?php
    $data = [
        "name" => "Carlos Daniel Roseno de Lima",
        "city" => "Pacajus",
        "age" => 17 
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Filling - Preenchimento de Fomulário</title>

    <link rel="stylesheet" type="text/css" href="./styles.css" media="screen" />
</head>
<body>
    <form action="databaseFake.php" method="GET" class="form-user">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="<?php echo $data['name'] ?>">
        </div>

        <div>
            <label for="age">Idade:</label>
            <input type="number" name="age" id="age" value="<?php echo $data['age'] ?>">
        </div>

        <div>
            <label for="city">Cidade:</label>
            <input type="text" name="city" id="city" value="<?php echo $data['city'] ?>">
        </div>
    </form>
</body>
</html>