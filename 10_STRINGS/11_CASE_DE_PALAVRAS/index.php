<?php

    $phraseWithInitalLowerCase = "alterando o case de uma palavra";
    $phraseWithInitalUpperCase = "Alterando o case de uma palavra";

    echo ucfirst($phraseWithInitalLowerCase) . "<br>"; //Alterando o case da primeira palavra
    echo ucfirst($phraseWithInitalUpperCase) . "<br>"; //Alterando o case da primeira palavra, nesse caso, a frase continua igual, pois já esta com a formatação correta

    //Alterando o case de todas as palavras com iniciais minúsculas, para maiúsculas
    echo ucwords($phraseWithInitalLowerCase); // "Alterando O Case De Uma Palavra"