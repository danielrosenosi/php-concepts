<?php

    class FirstClass
    {
        function speak() {
            echo "Hello!";
        }
    }

    $carlos = new FirstClass();

    $carlos->$name = "Carlos";

    echo $carlos->$name;
    echo "<br>";

    echo $carlos->speak();