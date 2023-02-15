<?php

$string = "I am a string";

$length = strlen($string);

for ($inner = 0 ; $inner < $length ; $inner++){
    
    if($inner%2==0){
            echo ucfirst($string[$inner]);

        }
        
    else{
        echo $string[$inner];
    }
}

?>