<?php
            require 'connect.php';

            echo "<br>";
            echo "<center> <h3> Exists </h3></center>";
        
            echo "<br><br>";
            
        
            $sql= "select name from emp where exists (select desig from designation where emp.id = designation.id)";
        
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