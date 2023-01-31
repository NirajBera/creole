<?php
        //if
        $x = 50;
        if($x == 50){
            echo "yes number is 50";
            echo "<br>";
        }

        // if...else
        $a=50;
        echo $a;
        echo "<br>";
        if($a==40){
            echo "yes number is equal to 40";
            echo "<br>";

        }else{
            echo "no number is not equal to 40";
            echo "<br>";
        }

        //if...elseif...else
        $m = date("H");



        if ($m < "10") {

            echo " good morning!";

        } elseif ($m < "20") {

            echo " good after noon!";

        } else {

            echo " good night!";

        }


?>