<?php
   $arr=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
   $len=count($arr);
   $sum=array_sum($arr);

   echo "array avg =", $sum/$len;
   echo "<br>";

   echo "max 7 value:-";
   echo "<br>";
   asort($arr);
   for($loop=1;$loop<=7;$loop++){
    echo $arr[$loop];
    echo "<br>";
   }
   echo "<br>";
   for($loop1=$len-7;$loop1<=7;$loop1--){
      echo 1;
      echo $arr[$loop];
      echo "<br>";
   }

?>