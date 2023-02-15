<?php
        class Base {
            public function sayHello() {
                echo 'Hello ';
            }
        }

        trait SayWorld {
            public function sayHello() {
                parent::sayHello();
                echo 'World!';
            }
        }

        class MyHelloWorld extends Base {
            use SayWorld;
        }

        $obj = new MyHelloWorld();
        $obj->sayHello();


        //multiple traits
        trait Hello {
            public function sayHello() {
                echo 'Hello ';
            }
        }
        
        trait World {
            public function sayWorld() {
                echo 'World';
            }
        }
        
        class MyHelloWorld1 {
            use Hello, World;
            public function sayExclamationMark() {
                echo '!';
            }
        }
        
        $obj1 = new MyHelloWorld1();
        $obj1->sayHello();
        $obj1->sayWorld();
        $obj1->sayExclamationMark();

        
?>