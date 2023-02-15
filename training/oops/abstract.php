
<?php

        abstract class Car
        {
            public $name;
            public function __construct($name)
            {
                $this->name = $name;
            }
            //abstract class both have abstract as well non abstract method
            public function msg(){
                echo "base class";
            }
            abstract public function intro();
        }


        class kia extends Car
        {
            public function intro()
            {
                return "car name is :- $this->name";
            }
        }

        class bmw extends Car
        {
            public function intro()
            {
                return "car name is :- $this->name";
            }
        }

        $kia = new kia("kia");
        $kia ->msg();
        echo "<br>";
       
        echo $kia->intro();
        echo "<br>";

        $bmw = new bmw("bmw");
        echo $bmw->intro();
       
?>

