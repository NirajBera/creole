<?php
            require 'connect.php';

            echo "<br>";
            echo "<center> <h3> Group BY </h3></center>";
        
            echo "<br><br>";
           
        
            $sql= "select count(id),desig from designation group by desig";
        
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