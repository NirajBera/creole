<html>
    <body>
        <form action="" method="post">
            <lable>enter a number :- </lable>
            <input type="number" name="input">
            <br><br>
            <button type ="submit" name="submit"> submit</button>
        </form>  
    </body>  
</html>
<?php

    if(isset($_POST['input'])){
        $n=$_POST['input'];
        $m=1;
        
        for($i=1;$i<=$n;$i++){
            $m=$m*$i;
         
            
        }
        echo "factorial = $m";
        
    }

?>