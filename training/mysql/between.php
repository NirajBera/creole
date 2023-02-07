<?php
        require 'connect.php';

        echo "<br>";
        echo "<center> <h3> Between Operator</h3></center>";

        echo "<br><br>";
        echo "<h4>between</h4>";
        $sql = "select * from emp where salary between 25000 and 50000 ";
    
        $res= mysqli_query($conn,$sql);
    
        if(mysqli_num_rows($res) > 0){
    
           while($row = mysqli_fetch_assoc($res)){
               echo print_r($row);
               echo "<br>";
           }
           
        }else{
            echo "no record";
        }

        
        echo "<br><br>";
        echo "<h4> not between</h4>";
        $sql = "select * from emp where salary not between 25000 and 50000 ";
    
        $res= mysqli_query($conn,$sql);
    
        if(mysqli_num_rows($res) > 0){
    
           while($row = mysqli_fetch_assoc($res)){
               echo print_r($row);
               echo "<br>";
           }
           
        }else{
            echo "no record";
        }

?>