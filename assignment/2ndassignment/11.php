<html>
    <body>
        <form action="" method="post">
            <lable>Enter a number :- </lable>
            <input type="txt" name="input">
           
            <br><br>
            <button type ="submit" name="submit"> submit</button>
        </form>  
    </body>  
</html>



<?php

    if(isset($_POST['submit'])){
        
        $input = $_POST['input'];
        trim($input," ");
        
        $len=strlen($input);
    
        //echo $len;

        for($inner=0;$inner<=$len;$inner++){
            if($inner % 2 == 0){
                echo "a";
                ucwords($input[$inner]);
            }

        }
       echo $input;
            
       
    }
   

?>