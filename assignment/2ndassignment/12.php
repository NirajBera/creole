<?php


    function def($name){
        $trim = trim($name);
        $array = explode("-",$trim);
        print_r($array);
    }

    $name='"The unexamined life is not worth living." - Socrates';
    def($name);




?>