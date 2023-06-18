<?php
    $data = $_POST;
    $validations = [];

    if(count($data) > 0) {
        if($data['name'] === "") {
            $validations['name'] = 'O campo nome é obrigatório';
        }

        if($data['email'] === "") {
            $validations['email'] = 'O campo email é obrigatório';
        }

        if($data['password'] !== $data['confirm-password']) {
            $validations['passwords'] = 'As senhas não conferem!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validations)): ?>
        <ul>
            <?php foreach($validations as $key => $value): ?>
                <li><?= $value ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="age">Idade:</label>
            <input type="text" name="age" id="age">
        </div>

        <div>
            <label for="phone">Telefone:</label>
            <input type="text" name="phone" id="phone">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="confirm-password">Confirme sua senha:</label>
            <input type="password" name="confirm-password" id="confirm-password">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>