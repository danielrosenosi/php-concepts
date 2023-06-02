<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Método Post</title>

    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <form action="register.php" method="POST">
        <div class="input-div">
            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Digite o seu email"
            />
        </div>

        <div class="input-div">
            <input
                type="password"
                name="password"
                placeholder="Digite uma senha"
                class="form-control"
            />
        </div>

        <div class="input-div">
            <label for="gender">Qual seu sexo?</label>

            <select id="gender" name="gender">
                <option name="male">Masculino</option>
                <option name="female">Feminino</option>
            </select>
        </div>

        <div class="input-div">
            <input type="submit" value="Cadastrar" />
        </div>
    </form>
</body>
</html>