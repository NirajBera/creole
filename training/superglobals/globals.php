<?php
    $var = 10;
    //global variable

    function writeMsg(){

        global $var;
        $var1 = 20;//local variable
        $GLOBALS['val2']=30;

        echo $var;
        echo "<br>";
        echo $var1;
        echo "<br>";
        echo $GLOBALS['val2'];


    }
    
     
    writeMsg();
    echo "<br>";

    echo $val2;

    echo "<br>";
    echo $var;

?>
