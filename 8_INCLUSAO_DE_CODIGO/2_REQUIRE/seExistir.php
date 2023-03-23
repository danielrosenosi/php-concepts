<?php
    //O require é utilizado para incluir um arquivo php em outro arquivo php
    //Se o arquivo não for encontrado, o require gera um fatal error e para a execução do script

    //Ele traz tudo do arquivo teste.php para este arquivo, incluindo as variáveis
    require('arquivos/teste.php');

    //Ele traz tudo do arquivo variables.php para este arquivo, incluindo as variáveis
    require('arquivos/variables.php');
?>

    <p>Após o require</p>

    <!-- A variável myName foi definida no arquivo teste.php -->
    <p>O valor da variável myName é: <?php echo $myName ?></p>

    <!-- As variáveis name, age e city foram definidas no arquivo variables.php -->
    <p>Olá, meu nome é <?php echo $name ?>, tenho <?php echo $age ?> anos e moro em <?php echo $city ?>>/p>