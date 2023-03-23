<?php
    $name = "Daniel";
    $email = "devroseno@gmail.com";
?>

<form>
    <div>
        <label for="name">Nome</label>
        <input type="text" value="<?= $name; ?>">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" value="<?= $email; ?>">
    </div>
    <br>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>