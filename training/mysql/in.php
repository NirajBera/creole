<?php
        require 'connect.php';

        echo "<br>";
        echo "<center> <h3> IN Operator</h3></center>";

        echo "<br><br>";
      
        $sql = "select * from emp where name in ('raj','ravi','vivek')";
    
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