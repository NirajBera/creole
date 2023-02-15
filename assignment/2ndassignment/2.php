<?php

$string = "I am an example string";

$length = strlen($string);

for($inner=0; $inner < $length; $inner++){
    

    if($string[$inner] == "a" || $string[$inner] == "x"){
    
    continue;
    }
    else{
        echo $string[$inner];
    }
}

?>