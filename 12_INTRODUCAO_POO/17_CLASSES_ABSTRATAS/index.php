<?php

    abstract class Test {

        public static function testingClass() {
            echo "Este método é de uma classe abstrata";
        }

    }

    // $teste = new Test, eu não posso instanciar essa classe, pois classes abstratas NÃO PODEM SER INSTANCIADAS!

    Test::testingClass(); //Eu devo usar a class abstract assim