<?php

    trait Objeto {
        public function test() {
            echo "Testando trait de objeto" . "<br>";
        }
    }

    class usandoTrait {
        use Objeto;
    }

    $x = new usandoTrait;

    $x->test(); //Testando trait de objeto