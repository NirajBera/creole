<?php

    class Car1{
        // Properties
        public $name;
        public $color;

         //constructor
        function __construct($name,$color){
            $this->name=$name;
            $this->color=$color;
        }
        
        function get_name(){
            return $this->name; 
        }
        function get_color(){
            return $this->color;
        }

    }


    $kia = new Car1('kia','red');
    echo "Name :- ".$kia->get_name();
    echo "<br>";
    echo "color :- ".$kia->get_color();

?>