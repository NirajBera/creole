<?php
    //while loop

    $a=1;

    while($a <= 10){
        echo $a;
        echo "<br>";
        $a++;
    }
    echo "<br>";
    echo "<br>";

    while($a <= 50){
        echo $a;
        echo "<br>";
        $a += 10;
    }
    echo "<br>";
    echo "<br>";

    //do while loop
    $x=1;

    do{
        echo $x;
        echo "<br>";
        $x++;
    }while($x<= 5);
        echo "<br>";
        echo "<br>";
        // it will ren min one time
        $z=2;
        do{
            echo $z;
            echo "<br>";
            $x++;
        }while($z<=1);
        echo "<br>";
        echo "<br>";
    //for loop
    for($i = 0;$i <= 50;$i += 10){
        echo $i;
        echo "<br>";
    }  
    echo "<br>";
    echo "<br>";  

    //foreach loop

    $id=array("raj"=>123,"jay"=>124,"neel"=>125);
    foreach($id as $a=>$val){
        echo "$a => $val";
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";

   // break and continue in loop
    $a=1;
    for($i = 1;$i <= 10;$i++){
        if($i == 4){
            continue;
        }
        if($i == 8){
            break;
        }
        echo $i;
        echo "<br>";

    }
    echo "<br>";


?>