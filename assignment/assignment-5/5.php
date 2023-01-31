<?php
   $arr=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
   $lrn=count($arr);
   $sum=array_sum($arr);

   echo "array avg =", $sum/$lrn;
   echo "<br>";

   echo "max 7 value:-";
   asort($arr);
   for($i=1;$i<=7;$i++){
    echo $arr[$i];
    echo "<br>";
   }

?>