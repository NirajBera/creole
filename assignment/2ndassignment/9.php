<html>
    <body>
        <form action="" method="post">
            <lable>Enter a number :- </lable>
            <input type="txt" name="input">
            <input type="txt" name="input2">
            <br><br>
            <button type ="submit" name="submit"> submit</button>
        </form>  
    </body>  
</html>



<?php

    if(isset($_POST['submit'])){
        
        $input = $_POST['input'];
        $input2 = $_POST['input2'];

        $word=strcmp($input,$input2);
        //echo $len;

        
       
            echo $word;
       
    }
   

?>