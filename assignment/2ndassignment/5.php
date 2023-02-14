<?php
    
    function check($str,$number){
        
        $number=$number-1;
        $check1 = $str[$number];
       
       
        if($check1 == 'a' || $check1 == 'e' || $check1 == 'i' || $check1 == 'o' || $check1 == 'u'){
            echo "vowel";
        }else{
            echo "consonant";
        }

    }

    check('cat',2);
    echo "<br>";
    check("hello", 4);
?>