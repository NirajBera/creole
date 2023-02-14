<?php

    class Car{
        // Properties
        public $name;
        public $color;

        //method 
        function set_info($name,$color){
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

    //object
    $kia = new Car('kia','red');

    $kia->set_info('kia','red');
    echo "Name :- ".$kia->get_name();
    echo "<br>";
    echo "color :- ".$kia->get_color();

    //instanceof
    echo "<br>";
    var_dump($kia instanceof Car);
?>