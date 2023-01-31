<?php

        $a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
        asort($a);
        echo "ascending order sort by value";
        echo "<br>";
        foreach($a as $s => $k){
            echo "$s = $k";
            echo "<br>";
        }
        ksort($a);
        echo "<br>";
        echo "ascending order sort by Key";
        echo "<br>";
        foreach($a as $s => $k){
            echo "$s = $k";
            echo "<br>";
        }
        echo "<br>";
        echo " descending order sorting by Value";
        echo "<br>";
        arsort($a);
        foreach($a as $s => $k){
            echo "$s = $k";
            echo "<br>";
        }
        echo "<br>";
        echo " descending order sorting by Key";
        echo "<br>";
        krsort($a);
        foreach($a as $s => $k){
            echo "$s = $k";
            echo "<br>";
        }
?>