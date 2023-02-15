<?php
    class bike1{
        public static $name="honda";
        public static $name1="hero";
    }

    echo bike1::$name;
    echo "<br>";
    echo bike1::$name1;
    echo "<br>";

    //other example
    class bike2{
        public static $name3="hero";
        public static function info1(){
            return self::$name3;
        }
    }

    echo bike2::info1();
?>