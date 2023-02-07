<?php
        require 'connect.php';

         echo "<br>";
         echo "<center> <h3> Like Operator</h3></center>";

         echo "<br><br>";
         echo "<h4>start from r</h4>";
         $sql1 = "select * from emp where name like 'r%'";
     
         $res1= mysqli_query($conn,$sql1);
     
         if(mysqli_num_rows($res1) > 0){
     
            while($row = mysqli_fetch_assoc($res1)){
                echo print_r($row);
                echo "<br>";
            }
            
         }else{
             echo "no record";
         }

         echo "<br><br>";
         echo "<h4>end from i</h4>";
         $sql2 = "select * from emp where name like '%i'";
     
         $res2= mysqli_query($conn,$sql2);
     
         if(mysqli_num_rows($res2) > 0){
     
            while($row = mysqli_fetch_assoc($res2)){
                echo print_r($row);
                echo "<br>";
            }
            
         }else{
             echo "no record";
         }

         echo "<br><br>";
         echo "<h4>anywhere from r</h4>";
         $sql3 = "select * from emp where name like '%r%'";
     
         $res3= mysqli_query($conn,$sql3);
     
         if(mysqli_num_rows($res3) > 0){
     
            while($row = mysqli_fetch_assoc($res3)){
                echo print_r($row);
                echo "<br>";
            }
            
         }else{
             echo "no record";
         }


         echo "<br><br>";
         echo "<h4>the third position </h4>";
         $sql4 = "select * from emp where name like '__r%'";
     
         $res4= mysqli_query($conn,$sql4);
     
         if(mysqli_num_rows($res4) > 0){
     
            while($row = mysqli_fetch_assoc($res4)){
                echo print_r($row);
                echo "<br>";
            }
            
         }else{
             echo "no record";
         }
     
?>