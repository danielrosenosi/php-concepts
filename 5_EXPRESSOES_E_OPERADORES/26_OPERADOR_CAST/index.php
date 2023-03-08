<?php

   // O operador CAST converte o tipo de uma variável para o tipo especificado

   $convertForInt = (int) "10";

   if($convertForInt === 10) { // 10 === 10
       echo "Verdadeiro";
   } else {
       echo "Falso";
   }

   echo "<br>";

   $convertForFloat = (float) "10.5";

   if($convertForFloat === 10.5) { // 10.5 === 10.5
       echo "Verdadeiro";
   } else {
       echo "Falso";
   }
