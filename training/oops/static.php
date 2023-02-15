<?php
    class hello {
        public static function msg() {
          echo "Hello World!";
        }
      }

      hello::msg();

      echo "<br>";



      //call throw constructor
      class hello1 {
        public static function msg1() {
          echo "Hello World!";
        }
      
        public function __construct() {
          self::msg1();
        }
      }
      
      new hello1();


      //call throw another class
      class bus{
        public static function name() {
          echo "patel";
        }
      }
      
      class info {
        public function message() {
         echo bus::name();
        }
      }
      
    
?>