<?php

    class Human {
        protected $name = "Carlos Daniel";
        protected $age = "17";

        public function speak() {
            echo "Me chamo {$this->name}, e tenho {$this->age} anos" . "<br>";
        }
    }

    class Teacher extends Human {
        private $teacherName;

        public function teacherTalkingToHuman($teacherName) {
            $this->teacherName = $teacherName;

            echo "{$this->teacherName} falou com {$this->name}" . "<br>";
        }
    }

    $human = new Human;
    $teacher = new Teacher;

    $human->speak("Daniel", 17);

    $teacher->teacherTalkingToHuman("Marcos");