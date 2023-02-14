<?php

    class Car1{
        // Properties
        public $name;
        protected $color;
        private $price = 350000;
        public $key = 2;
        

         

           
        
        function __construct($name,$color,$key){
            $this->name=$name;
            $this->color=$color;
            $this->key=$key;
            
            //$this->price=$price;
            echo "numbor of kye give car :- ". $key;//public 
            echo "<br>";
            echo "color :- ". $color ;//protected use in class or method 
        }
        
        function get_price(){
            
            return $this->price;
        }
        

    }


    $kia = new Car1('kia','red',2);
    
    $p1= $kia->get_price();
    //echo "numbor of kye give car". $kia->key;
    echo "<br>";
    echo $p1;
?>