<?php declare(strict_type=1);

    //create simple function
    function writeMsg(){
        echo "this is writeMsg function";
    
    }
    
    writeMsg();
    echo "<br>";



    //function  argument
    function getInfo($name,$id){
        echo "your name is $name and your id is $id";
    }

    getInfo("raj",123);
    echo "<br>";

    

    //
    function addNumbers(int $a, int $b) {
         return $a + $b;
        }
    echo addNumbers(5, 5);



    //default argument
    function defArg(int $df = 50) {
            echo "The default argument is : $df<br>";
        }

        defArg();
        echo "<br>";
        defArg(60);



        //passing by reference
        $p=70;
        defArg($p);
        echo "<br>";



    //variable arguments
    function sum(...$num) {
            $val = 0;
            foreach ($num as $n) {
                         $val += $n;
            }
            return $val;
        }

    echo sum(1, 2, 3, 4,5);   
    echo "<br>"; 

    // type conversion
    function subNumbers(float $a, float $b) : int {
                return (int)($a - $b);
            }
        echo subNumbers(7.2, 5.2);



?>