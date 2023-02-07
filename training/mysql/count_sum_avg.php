<?php
     require 'connect.php';

     echo "<br>";
     echo "<center> <h3> COUNT </h3></center>";
     $sql1 = "select count(id) from emp ";
 
     $res1= mysqli_query($conn,$sql1);
 
     if(mysqli_num_rows($res1) > 0){
 
             $row = mysqli_fetch_assoc($res1);
             print_r($row);
        
     }else{
         echo "no record";
     }

     echo "<br><br>";
     echo "<center> <h3> AVG </h3></center>";
     $sql2 = "select avg(salary) from emp ";
 
     $res2= mysqli_query($conn,$sql2);
 
     if(mysqli_num_rows($res2) > 0){
 
             $row = mysqli_fetch_assoc($res2);
             print_r($row);
        
     }else{
         echo "no record";
     }

     echo "<br><br>";
     echo "<center> <h3> SUM </h3></center>";
     $sql3 = "select sum(salary) from emp ";
 
     $res3= mysqli_query($conn,$sql3);
 
     if(mysqli_num_rows($res3) > 0){
 
             $row = mysqli_fetch_assoc($res3);
             print_r($row);
        
     }else{
         echo "no record";
     }
 
 
?>