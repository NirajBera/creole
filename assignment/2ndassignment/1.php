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
        $len=strlen($input);
       
        echo "<br>";
        for($inner=$len;$inner>=0;$inner--){
            echo $input[$inner];
        }
    }
   

?>