<?php

use Car as GlobalCar;

        class Car{
            public $name;
            public $color;

           function massage($name,$color){
                $this->name=$name;
                $this->color=$color;
                 echo "Name of car is :- {$this->name} and color is :- {$this->color}";
           }
        }
        class abc extends Car{
            //public $key;
            function massage($name,$color){
                $this->name=$name;
                $this->color=$color;
                
                echo "Name of car is :- {$this->name} and color is :- {$this->color}";
            }
        }

        $kia = new abc();
        
        $kia->massage('kia','yellow');

        $bmw= new Car();
        echo "<br>";
        $bmw->massage('kia','green');

?>