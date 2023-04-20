<?php

    class Human
    {
        public string $name;
        public int $age;

        public function showName() {
            echo "meu nome é {$this->name}";
        }
    }

    //class_exists() verifica se uma classe existe ou não (boolean)
    if(class_exists("Human")) {
        echo "A classe Human existe!" . "<br>";
    } else {
        echo "A classe Human não existe!" . "<br>";
    }

    if(class_exists("Car")) {
        echo "A classe Car existe!" . "<br>";
    } else {
        echo "A classe Car não existe!" . "<br>";
    }

    //get_class_vars(), retorna as propriedades da class
    print_r(get_class_vars("Human")); //Array ( [name] => [age] => )

    //get_class_methods(), retorna os métodos da class
    print_r(get_class_methods("Human")); //Array ( [0] => showName )