<?php

    function rem($str,$a,$b){
        $len = strlen($str);

        for($inner = 0;$inner<=$len;$inner++){

            if($a == $str[$inner]){
                rtrim($str,$a);
            }

            if($b==$str[$inner]){
                rtrim($str,$b);
            }
            
        }

        echo $str;

    }
    

    rem('I am an example string','a','x');


?>