<?php

        $arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
        asort($arr);
        echo "ascending order sort by value";
        echo "<br>";
        foreach($arr as $key => $value){
            echo "$key = $value";
            echo "<br>";
        }
        ksort($arr);
        echo "<br>";
        echo "ascending order sort by Key";
        echo "<br>";
        foreach($arr as $key => $value){
            echo "$key = $value";
            echo "<br>";
        }
        echo "<br>";
        echo " descending order sorting by Value";
        echo "<br>";
        arsort($arr);
        foreach($arr as $key => $value){
            echo "$key = $value";
            echo "<br>";
        }
        echo "<br>";
        echo " descending order sorting by Key";
        echo "<br>";
        krsort($arr);
        foreach($arr as $key => $value){
            echo "$key = $value";
            echo "<br>";
        }
?>