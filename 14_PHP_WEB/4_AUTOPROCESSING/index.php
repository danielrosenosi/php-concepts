<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['fullName'])) {
        $fullName = $_POST['fullName'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoprocessamento</title>
</head>
<body>
    <?php if($method == 'GET'): ?>
        <form action="index.php" method="POST">
            <div>
                <label for="fullName">Nome completo</label>
                <input type="text" name="fullName" placeholder="Nome completo">
            </div>

            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    <?php
        else:
            echo "Nome completo: $fullName";
        endif;
    ?>
</body>
</html>