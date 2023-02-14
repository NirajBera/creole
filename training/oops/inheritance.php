<?php

    class Car2{
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name=$name;
            $this->color=$color;

        }
        function info(){
            echo "Name of car is :- {$this->name} and color is :- {$this->color}";
        }
    }
    class kia extends Car2{

        function massage(){
            echo "Name of car is :- {$this->name} and color is :- {$this->color}";
        }
    }

    $kia = new kia('kia','red');
    $kia->info();
    echo "<br>";
    $kia->massage();


    //protected access modifiers
    class Car1{
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name=$name;
            $this->color=$color;

        }
        protected function info1(){
            echo "Name of car is :- {$this->name} and color is :- {$this->color}";
        }
    }
    class kia1 extends Car1{

        function massage1(){
            echo "Name of car is :- {$this->name} and color is :- {$this->color}";
            $this->info1();// it will call
        }
    }

    $kia = new kia1('kia','red');
    //$kia->info1(); // error method is protected
    echo "<br>";
    $kia->massage1();


?>