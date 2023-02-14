<?php

    class a{
        function display(){
            echo "all of the a class";
        }

    }
    class b extends a{
        function display1(){
            echo "all of the b class";
        }
    }

    class c extends b{
        function display2(){
            echo "all of the c class";
        }
    }

    $d = new c();
    $d->display();
    echo "<br>";
    $d->display1();
    echo "<br>";
    $d->display2();
?>