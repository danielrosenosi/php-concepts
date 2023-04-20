<?php

    $person = new Class() {
        
        public $name = "Carlos";

        public function speakName()
        {
            echo "Meu nome é {$this->name}";
        }
    };

    echo $person->name . "<br>";

    $person->speakName();