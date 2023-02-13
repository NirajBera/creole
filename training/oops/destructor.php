<?php

    class car1{
        // Properties
        public $name;
        public $color;

        //constructor
        function __construct($name,$color){
            $this->name=$name;
            $this->color=$color;
        }
        
        //destructor
        function __destruct()
        {
            echo "Name :- {$this->name} and color :- {$this->color}.";
        }

    }


    $kia = new car1('kia','red');
    

?>