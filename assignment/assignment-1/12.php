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
        $input=$_POST['input'];
        $fact=1;
        
        for($loop=1;$loop<=$input;$loop++){
            $fact=$fact*$input;
         
            
        }
        echo "factorial = $fact";
        
    }

?>