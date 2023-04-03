<?php

    class Animal {
        
        public $name;

        function chooseName($name) {
            $this->name = $name;
        }

        function callingScobdoo() {
            return "O {$this->name} latiu";
        }

        function callingScobdooOutLoud() {
            return strtoupper($this->callingScobdoo());
        }

    }

    $scobdoo = new Animal;

    echo "O nome do animal é: {$scobdoo->name}" . "<br>"; //Não tem nome ainda, retornou: "O nome do animal é: "

    $scobdoo->chooseName("Scoobdoo");

    echo "O nome do animal é: {$scobdoo->name}" . "<br>"; //O nome do animal é: Scoobdoo

    echo $scobdoo->callingScobdoo() . "<br>"; //Chamando em voz normal: O Scoobdoo latiu

    echo $scobdoo->callingScobdooOutLoud() . "<br>"; //Chamando em voz alta: O SCOOBDOO LATIU